# Laravel Mass Update

[![Latest Version on Packagist](https://img.shields.io/packagist/v/iksaku/laravel-mass-update.svg?style=flat-square)](https://packagist.org/packages/iksaku/laravel-mass-update)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/iksaku/laravel-mass-update/run-tests.yml?branch=main&label=tests)](https://github.com/iksaku/laravel-mass-update/actions/workflows/run-tests.yml?query=branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/iksaku/laravel-mass-update/php-cs-fixer.yml?branch=main&label=code%20style)](https://github.com/iksaku/laravel-mass-update/actions/workflows/php-cs-fixer.yml?query=branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/iksaku/laravel-mass-update.svg?style=flat-square)](https://packagist.org/packages/iksaku/laravel-mass-update)

Update multiple Laravel Model records, each with its own set of values, sending a single
query to your database!

## Installation

You can install the package via composer:

```bash
composer require iksaku/laravel-mass-update
```

## Usage

In your model class, add the `Iksaku\Laravel\MassUpdate\MassUpdatable` trait:

```php
use Illuminate\Database\Eloquent\Model;
use Iksaku\Laravel\MassUpdate\MassUpdatable;

class User extends Model
{
    use MassUpdatable;
    
    // ...
}
```

And that's all! Your model is now ready to update multiple records with varying values in a single query!

Let's take a look at some possible use cases for this new query:

### Simple use case: Update the values of multiple records

Imagine that you have the following `users` table:

| id | name           | username |
| -- | -------------- | -------- |
| 1  | Jorge Gonzales | iksaku   |
| 2  | Gladys Martines| gm_mtz   |

But, we want to update both records since those users have told us that their legal last name was misspelled:
  * `González` is written with an accent on the letter `a`, and only uses `z`, never an `s`.
  * `Martínez` is written with an accent on the letter `i`, and last letter should be a `z`, not an `s`

Well, we can mass update those specific records:

```php
User::massUpdate(
    values: [
        ['id' => 1, 'name' => 'Jorge González'],
        ['id' => 2, 'name' => 'Gladys Martínez'],
    ]
);
```

Now, both records will be updated with their corresponding values in a single query, resulting in:

| id | name            | username |
| -- | --------------- | -------- |
| 1  | Jorge González  | iksaku   |
| 2  | Gladys Martínez | gm_mtz   |

By default, the `massUpdate` query will grab your model's primary key name and apply it as part of
the query to not affect other records.

If you want to use another column as an index to separate value types, you could pass it as a second
argument to the function call:

```php
User::massUpdate(
    values: [
        ['username' => 'iksaku', 'name' => 'Jorge González'],
        ['username' => 'gm_mtz', 'name' => 'Gladys Martínez'],
    ],
    uniqueBy: 'username'
);
```

### Simple use case #2: Updating multiple Eloquent Models

If you need to update the values in some Model classes and want to automatically mass update those changes,
then this is for you!

The existing `masUpdate` query is capable of identifying the _dirty_ attributes of `Eloquent` model classes
and compile them properly. You don't need to manually convert the models into an array, you just pass the
list of models you want to update, and it takes care of the rest.

> Tip: If you pass a full list of `Eloquent` models, only those with _dirty_ values will be updated,
> so you don't actually need to filter the unchanged ones manually.

Let's recreate the previous example, but using `Eloquent` models...

```php
// Say we already pulled our user models previously... Something like this:
$jorge = User::where('name', 'Jorge Gonzales')->first();
$gladys = User::where('name', 'Gladys Martines')->first();

// And let's say we already made changes to those models... Like this:
$jorge->name = 'Jorge González';
$gladys->name = 'Gladys Martínez';

// And now, let's update both models in a single query:
User::massUpdate(
    values: [$jorge, $gladys]
);
```

Pretty cool, right?

> Note: It is only possible to mass update instances of the same `Eloquent` model,
> it is not possible to mix the _Query Builder_ with different `Eloquent` model classes.

### Complicated use case: Using multiple indexes to differentiate records

Let's say that we just created `expenses` table to track how much we spend across time, and
we manually filled the following values:

| id | year | quarter | total_expenses |
| -- | ---- | ------- | -------------- |
| .. | ..   | ..      | ..             |
| .. | 2019 | Q3      | 216.70         |
| .. | 2019 | Q4      | 216.70         |
| .. | 2020 | Q1      | `416.70`       |
| .. | 2020 | Q2      | 211.12         |
| .. | 2020 | Q3      | 113.17         |
| .. | 2020 | Q4      | 422.89         |
| .. | 2021 | Q1      | `431.35`       |

> Above information is not real, I don't track my expenses quarterly.

Oops... We made a little mistake... Expenses from Q1 of 2020 and 2021 are switched, and in order to fix it
we could only pass the `quarter` column as an index, but if we only pass down the `quarter` column as an index,
we'll modify **ALL** `Q1` records. So, for this, we should also pass down the `year` column as an index:

```php
Expense::massUpdate(
    values: [
        ['year' => 2020, 'quarter' => 'Q1', 'total_expenses' => 431.35],
        ['year' => 2021, 'quarter' => 'Q1', 'total_expenses' => 416.70],
    ],
    uniqueBy: ['year', 'quarter']
);
```

> Tip: If you ever need to specify more than one or two indexes,
> just include all of them in the `values` and `uniqueBy` parameters.

The result in the table will be properly updated:

| id | year | quarter | total_expenses |
| -- | ---- | ------- | -------------- |
| .. | ..   | ..      | ..             |
| .. | 2020 | Q1      | `431.35`       |
| .. | ..   | ..      | ..             |
| .. | 2021 | Q1      | `416.70`       |

> **NOTE**: It is important that you always include the `uniqueBy` columns in your
> `values` array, exceptions will be thrown otherwise.

> **NOTE #2**: It is not possible to update the values of the `uniqueBy` columns.
> Every column specified in this parameter will be filtered from the ones that
> are going to be updated.
>
> This prevents unexpected side effects from happening while updating `values`
> in `array` shape and passed as `Eloquent` models.

### Advanced use case: Chaining with other query statements

Let's try to keep things simple and imagine a system that tracks _To-Do_ items for multiple users:

| id | user_id | content                | order |
| -- | ------- | ---------------------- | ----- |
|  1 | 1       | Pick up my daughter    | 2     |
|  2 | 1       | Buy a new ThinkPad     | 1     |
|  3 | 1       | Drink water            | 3     |

Like every _To-Do_ system, we let our users `order` their _To-Do_ items to see the most important ones at
the top of the list, and to do this, we may be using a [simple sorting package](https://github.com/asantibanez/laravel-blade-sortable)
that allows the user to drag items up and down the list.

Once the user moves one item in the list, in the backend we may receive an array with a specific key-value shape:
`['position' => 'id']`. With this, we're going to update the records' `position` based on the given `id`.

We can simply call our `massUpdate` query function and everything will be done... Well, sort of...

In this specific scenario, we're dealing with **multiple lists for multiple users**, that means that we may not
be always able to control which `id` columns are sent to the server, maybe some malicious actor wants to hijack
our _To-Do_ list and lower the priority for buying ThinkPads. This is a pretty serious security concern.

There are many ways to solve this kind of issues, and a simple one is to _chain query statements_ to our
`massUpdate` function.

In this case, we're going to add a `where()` statement to only update those items that belong to the currently
logged in user. And it's as simple as in any other Laravel query builder:

```php
TodoItem::query()
    ->where('user_id', auth()->id())
    ->massUpdate(
        values: collect($request->input('item_order'))
            ->mapWithKeys(
                fn ($id, int $position) => ['id' => $id, 'order' => $position]
            )
    );
```

> Tip: Did you know you can pass Collections, LazyCollections, Eloquent Collections and basically
> any `Arrayable` instance as `values` to the `massUpdate` query function?

This can be used as an extra layer to ensure data integrity when dealing with User-provided input
that affects multiple records in the database.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

If you discover any security related issues, please email yo@jorgeglz.io instead of using the issue tracker.

## Credits

- [Jorge González](https://github.com/iksaku)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

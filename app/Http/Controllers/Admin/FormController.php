<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFrontRequest;
use App\Models\Contact;

class FormController extends Controller
{
    public function send(ContactFrontRequest $request){
        $veri = new Contact();
        $veri->name = $request->input('name');
        $veri->phone = $request->input('phone');
        // Diğer form alanlarını da burada kaydedebilirsiniz
        $veri->save();

        return redirect()->back()->with('success', 'Veriler başarıyla kaydedildi.');
    }
}

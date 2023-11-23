<?php

namespace App\Services;

use DOMDocument;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class FileUploadService
{
    public function uploadFile(UploadedFile $image, ?string $path = 'images', string $disk = 'public'): string
    {
//        $extention=in_array($image->extension(),['png','jpeg','jpg','svg']) ? 'webp' : $image->extension();
//        $name = $path . '/' . Str::uuid()->toString() . '.' . $extention;
//        $image->storeAs($disk, $name);
//        return $name;
        $extention = in_array($image->extension(), ['png', 'jpeg', 'jpg']) ? 'webp' : $image->extension();

        $name =$path . '/' .  Str::uuid()->toString() . '.' . $extention;

        if(!$extention=='svg') {
            $img = Image::make($image->path());

            if ($extention !== 'webp') {
                $img->encode('webp',0);
            }
            $directoryPath = storage_path('app/public/' . $path);
            if (!file_exists($directoryPath)) {
                mkdir($directoryPath, 0755, true);
            }
            $img->save(storage_path('app/public/' . $name));
        }
        else{
            $image->storeAs($disk, $name);
        }
        return $name;
    }
    public function descriptionUploadFile($description, ?string $path = 'images', string $disk = 'public'): string
    {
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }
        $dom = new DOMDocument();
        $dom->loadHTML($description,9);
        $images = $dom->getElementsByTagName('img');//video

        foreach ($images as $img) {
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = '/'.$path.'/' . Str::uuid()->toString() . '.webp';

            file_put_contents(storage_path('app/public' . $image_name), $data);

            $img->removeAttribute('src');

            $img->setAttribute('src', asset('storage' . $image_name));
        }

//        $data['description']= $dom->saveHTML();

        return  $dom->saveHTML();
    }
    public function descriptionRemoveFile($description)
    {
        $dom= new DOMDocument();
        $dom->loadHTML($description,9);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            $src = $img->getAttribute('src');
            $path = Str::of($src)->after('/');


            if (File::exists($path)) {
                File::delete($path);

            }
        }
    }

    public function replaceFile(UploadedFile $image, ?string $old_image_name = null, ?string $path = 'images', string $disk = 'public'): string
    {
//        $this->removeFile($old_image_name ?? '', $disk);
//        return $this->uploadFile($image, $path, $disk);

        if (!empty($old_image_name)) {
//            dd($old_image_name);
            $oldImagePath = storage_path('app/' . $old_image_name);
//            dd($oldImagePath);
            Storage::disk($disk)->delete($old_image_name);
        }
        return $this->uploadFile($image, $path, $disk);

    }

    public function copyImage($filePath, $newFileName, $disk = 'public', $delete_url = null,$folder_name = null): string
    {
        $folder = '';
        $splitted = explode('/', $filePath);

        if (count($splitted) > 1) {
            $folder = $folder_name ?? $splitted[0];
            $fileName = $splitted[1];
        } else {
            $fileName = $splitted[0];
        }
        $teamImageExt = explode('.', $fileName)[1];

        $newImageName = ($folder ? $folder . '/' : '') . $newFileName . '.' . $teamImageExt;
        Storage::disk($disk)->copy($filePath, $newImageName);
        if ($delete_url) {
            Storage::disk($disk)->delete($delete_url);
        }
        return $newImageName;
    }

    public function removeFile($image_name, string $disk = 'public')
    {
        Storage::disk($disk)->delete($image_name);
    }
}



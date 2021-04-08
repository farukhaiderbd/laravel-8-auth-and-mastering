<?php



if (!function_exists('app_name')) {

function app_name()
{
    return config('app.name');
}
}

// Image Uploads function
if (!function_exists('image_uploads')) {
function image_uploads($request, $key, $folder, $size)
{
   if(!empty($request->$key)){
    $image = hexdec(uniqid()) . '.' . $request->$key->getClientOriginalExtension();
    if(!empty($size)){
        Image::make($request->image)->resize($size)->save('uploads/' . $folder . '/' . $image);
    }else{
        Image::make($request->image)->save('uploads/' . $folder . '/' . $image);
    }
    $image_name = 'uploads/' . $folder . '/' . $image;
    return $image_name;
   }
}
}

// Edit page get value date function
if (!function_exists('getValueData')) {

function getValueData($key,$data)
{
    if(!empty($data)){
        return $data[$key];
    }else{

    }
}
}
// Image unlink function
if (!function_exists('imageUnlink')) {

function imageUnlink($file)
{
    if(file_exists($file) && !empty($file)){
        unlink($file);
        // return true;
    }else{
        // dd('Image No found');
    }

}
}


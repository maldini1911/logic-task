<?php

namespace App\Http\Controllers\Traits;

trait TraitHelper{


  function uploadImage($folder, $image)
  {
    $image->store('/', $folder);
    $filename = $image->hashName();
    $path = 'uploads/'. $folder . '/' . $filename;
    return $path;
  }


}

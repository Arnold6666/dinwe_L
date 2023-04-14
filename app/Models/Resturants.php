<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Resturants extends Model
{
  use HasFactory;

  protected $table = 'resturants';
  protected $primaryKey = 'resturant_id';
  protected $keytype = 'int';
  public $timestamp = false;

  protected $fillable = [];

  public function store(Request $request)
  {
    $resturant_name = $request->name;
    $resturant_address = $request->address;
    // die(is_string($request->image1));
    $image1 = $this->imageTreat($request->image1);
    $image2 = $this->imageTreat($request->image2);
    $image3 = $this->imageTreat($request->image3);
    $menu1 = $this->imageTreat($request->menu1);
    $menu2 = $this->imageTreat($request->menu2);
    $menu3 = $this->imageTreat($request->menu3);
    $resturant_intro = $request->intro;

    DB::table('resturants')->insert([
      'resturant_name'     => $resturant_name,
      'resturant_address'  => $resturant_address,
      'resturant_image1'   => $image1,
      'resturant_image2'   => $image2,
      'resturant_image3'   => $image3,
      'resturant_menu1'    => $menu1,
      'resturant_menu2'    => $menu2,
      'resturant_menu3'    => $menu3,
      'resturant_intro'    => $resturant_intro,
    ]);
    return "success";
  }

  public function imageTreat($image)
  {
    // die(is_string($image));
    if ($image === null) {
      return null;
    } else {
      $data = $image->get();
      $mime_type = $image->getMimeType();
      $imageData = base64_encode($data);
      $src = "data:{$mime_type};base64,{$imageData}";
      return $src;
    }
  }
}

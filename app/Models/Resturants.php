<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Resturants extends Model
{
    use HasFactory;

    protected $table = 'resturants';
    protected $primaryKey = 'resturant_id';
    protected $keytype = 'int';
    public $timestamp = false;

    protected $fillable = [];

    public function store(Request $request){
        $resturant_name = $request->name;
        $resturant_address = $request->address;
        $resturant_name = $request->name;

        if (isset($request->image)) {
            $data = $request->image->get();
            $mime_type = $request->image->getMimeType();
            $imageData = base64_encode($data);
            $src = "data:{$mime_type};base64,{$imageData}";
            $image = $src;
            // die($pimage);
            DB::table('resturants')->insert([
              'title'     => $title,
              'text'      => $text,
              'image'    => $image,
              'state'     => $state,
              'created_at'    => $created_at,
              'updated_at'    => $updated_at,
            ]);
          } else {
            $image = null;
            DB::table('resturants')->insert([
              'title'     => $title,
              'text'      => $text,
              'image'    => $image,
              'state'     => $state,
              'created_at'    => $created_at,
              'updated_at'    => $updated_at,
            ]);
          }
          return "success";
    }

}

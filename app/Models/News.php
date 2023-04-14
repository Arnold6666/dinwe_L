<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class News extends Model
{
  use HasFactory;

  protected $table = 'news';
  protected $primaryKey = 'id';
  protected $keytype = 'int';
  public $timestamp = false;

  protected $fillable = [
    'image',
    'title',
    'text',
    'created_at',
    'updated_at',
    'state'
  ];

  public function uploadNews(Request $request)
  {
    $title = $request->title;
    $text = $request->content;
    $state = isset($request->state) ? 1 : 0;

    $dateTimeStr = Carbon::now()->toDateTimeString();
    $created_at = $dateTimeStr;
    $updated_at = $dateTimeStr;
    // die($text);
    // die(is_string($request->image));
    if (isset($request->image)) {
      // die(is_string($request->image));
      $data = $request->image->get();
      $mime_type = $request->image->getMimeType();
      $imageData = base64_encode($data);
      $src = "data:{$mime_type};base64,{$imageData}";
      $image = $src;
      // die($pimage);
      DB::table('news')->insert([
        'title'     => $title,
        'text'      => $text,
        'image'    => $image,
        'state'     => $state,
        'created_at'    => $created_at,
        'updated_at'    => $updated_at,
      ]);
    } else {
      $image = null;
      DB::table('news')->insert([
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

  public function getNews()
  {
    $allnews = DB::table('news')->get();
    $json = $allnews->toJson();

    return $json;
  }

  public function updateNew(Request $request)
  {
    $id = $request->id;
    $new_title = $request->new_title;
    $new_text = $request->new_text;
    $new_state = isset($request->new_checkbox) ? 1 : 0;
    $dateTimeStr = Carbon::now()->toDateTimeString();
    $updated_at = $dateTimeStr;

    if (isset($request->new_image)) {
      $data = $request->new_image->get();
      $mime_type = $request->new_image->getMimeType();
      $imageData = base64_encode($data);
      $src = "data:{$mime_type};base64,{$imageData}";
      $image = $src;
      // die($pimage);
      DB::table('news')
        ->where('id', $id)
        ->update([
          'title'       => $new_title,
          'text'        => $new_text,
          'image'       => $image,
          'state'       => $new_state,
          'updated_at'  => $updated_at,
        ]);
    } else {
      $image = null;
      DB::table('news')
        ->where('id', $id)
        ->update([
          'title'       => $new_title,
          'text'        => $new_text,
          'image'       => $image,
          'state'       => $new_state,
          'updated_at'  => $updated_at,
        ]);
    }
    return "success";
  }
}

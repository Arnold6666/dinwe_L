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

        if (isset($request->image)) {
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

    
}

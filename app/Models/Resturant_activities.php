<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Resturant_activities extends Model
{
    use HasFactory;

    protected $table = "resturant_activities";
    protected $primaryKey = 'id';
    protected $keytype = 'int';
    public $timestamp = false;

    protected $fillable = [];

    public function store(Request $request){
        $resturant_id = $request->resturant_id;
        $title = $request->title;
        $text = $request->text;
        $begin_date = $request->begin_date;
        $end_date = $request->end_date;

        // 圖片處理
        $data = $request->image->get();
        $mime_type = $request->image->getMimeType();
        $imageData = base64_encode($data);
        $image = "data:{$mime_type};base64,{$imageData}";

        DB::table('resturant_activities')->insert([
            'resturant_id'  => $resturant_id,
            'image'         => $image,
            'title'         => $title,
            'text'          => $text,
            'begin_date'    => $begin_date,
            'end_date'      => $end_date,
        ]);

        return "success";
    }

    public function show($id){
        $result = DB::table('resturant_activities')->where('resturant_id', $id)->get();
        return $result;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class M_orders extends Model
{
    use HasFactory;

    protected $table = 'm_orders';
    protected $primaryKey = 'order_id';
    protected $keytype = 'int';
    public $timestamp = false;

    protected $fillable = [
        'member_id',
        'resturant_id',
        'order_who',
        'order_phone',
        'order_date',
        'order_time',
        'order_adult',
        'order_child',
        'order_notes'
    ];

    public function store(Request $request)
    {

        $member = DB::table('members')->where('member_id', $request->member_id)->first();

        $note = [
            "childseat" => $request->childseat,
            "childtool" => $request->childtool,
            "note"      => $request->ordernote,
        ];

        $note = json_encode($note);

        DB::table('m_orders')->insert([
            'member_id'     => $request->member_id,
            'resturant_id'  => $request->resturant_id,
            'order_who'     => $member->member_name,
            'order_phone'   => $member->member_cellphone,
            'order_date'    => $request->order_date,
            'order_time'    => $request->orderTime,
            'order_adult'   => $request->order_adult,
            'order_child'   => $request->order_child,
            'order_notes'   => $note
        ]);

        // 利用modal原生方法會需要輸入 created_at 和 updated_at
        // $M_orders = M_orders::create([
        //     'member_id'     => $request->member_id,
        //     'resturant_id'  => $request->resturant_id,
        //     'order_who'     => $member->member_name,
        //     'order_phone'   => $member->member_cellphone,
        //     'order_date'    => $request->order_date,
        //     'order_time'    => $request->orderTime,
        //     'order_adult'   => $request->order_adult,
        //     'order_child'   => $request->order_child,
        //     'order_notes'   => $note
        // ]);

        // // 手動設定 created_at 和 updated_at 為 null
        // $M_orders->created_at = null;
        // $M_orders->updated_at = null;

        // // 儲存資料列
        // $M_orders->save();

        return "success";
    }
}

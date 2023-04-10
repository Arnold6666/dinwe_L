<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Members extends Model
{
    use HasFactory;

    protected $table = 'members';
    protected $primaryKey = 'member_id';
    protected $keytype = 'int';
    public $timestamps = false;

    protected $fillable = [
        'member_account',
        'member_password',
        'member_email',
        'member_name',
        'member_birthday',
        'member_cellphone',
        'member_image',
        'member_state',
        'member_token',
        'member_giveup'
    ];

    public function register(Request $request){
        // die("hello");
        $new_account     = $request->account;
        $new_password    = $request->password;
        $new_password2   = $request->password2;
        $new_email       = $request->email;

        $userAccounts = DB::table('members')->get();
        foreach($userAccounts as $userAccount){
            $account =  $userAccount->member_account;
            $email =    $userAccount->member_email;
            if($new_account === $account){
                return "account";
            }elseif($new_email === $email){
                return "email";
            }
        }

        if($new_password === $new_password2){
            $new_password = hash("sha256",$new_password);
            DB::table('members')->insert([
                'member_account' => $new_account,
                'member_password' => $new_password,
                'member_email' => $new_email,
            ]);
        }
        return "success";
    }
}

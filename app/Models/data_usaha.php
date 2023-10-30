<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class data_usaha extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('data_usahas')->where('id_user', Auth::user()->id)->get();
    }
    public function DetailDatau($id)
    {
        return DB::table('data_usahas')->where('id_user', $id)->get();
    }
    public function addData($data)
    {
        DB::table('data_usahas')->insert($data);
    }
    public function detailData($id)
    {
        return DB::table('data_usahas')->where('id_usaha', $id)->first();
    }
    public function editData($id, $data)
    {
        DB::table('data_usahas')->where('id_usaha', $id)->update($data);
    }
    public function hapusData($id)
    {
        DB::table('data_usahas')->where('id_usaha', $id)->delete();
    }

    public function deleteUser($id)
    {
        DB::table('data_usahas')->where('id_user', $id)->delete();
    }

    public function getUser($id)
    {
        return DB::table('data_usahas')->join('users', 'users.id','=','data_usahas.id_user')->where('data_usahas.id_user', $id)->first();
    }
}

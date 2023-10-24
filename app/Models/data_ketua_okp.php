<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_ketua_okp extends Model
{
    use HasFactory;

    public function detailData($id)
    {
        return DB::table('data_ketua_okps')->where('id_ket_umum', $id)->first();
    }
    // public function addData($data)
    // {
    //     DB::table('data_ketuas')->insert($data);
    // }
    public function editData($id, $data)
    {
        DB::table('data_ketua_okps')->where('id_ket_umum', $id)->update($data);
    }

    public function checkID()
    {
        return DB::table('data_ketua_okps')->max('id_ket_umum');
    }

    public function addData($data)
    {
        DB::table('data_ketua_okps')->insert($data);
    }
}

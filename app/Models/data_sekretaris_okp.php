<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_sekretaris_okp extends Model
{
    use HasFactory;

    public function detailData($id)
    {
        return DB::table('data_sekretaris_okps')->where('id_skre_umum', $id)->first();
    }
    // public function addData($data)
    // {
    //     DB::table('data_sekretaris_okps')->insert($data);
    // }
    public function editData($id, $data)
    {
        DB::table('data_sekretaris_okps')->where('id_skre_umum', $id)->update($data);
    }

    public function checkID()
    {
        return DB::table('data_sekretaris_okps')->max('id_skre_umum');
    }

    public function addData($data)
    {
        DB::table('data_sekretaris_okps')->insert($data);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_bendahara_okp extends Model
{
    use HasFactory;

    public function detailData($id)
    {
        return DB::table('data_bendahara_okps')->where('id_bend_umum', $id)->first();
    }
    // public function addData($data)
    // {
    //     DB::table('data_bendahara_okps')->insert($data);
    // }
    public function editData($id, $data)
    {
        DB::table('data_bendahara_okps')->where('id_bend_umum', $id)->update($data);
    }

    public function checkID()
    {
        return DB::table('data_bendahara_okps')->max('id_bend_umum');
    }

    public function addData($data)
    {
        DB::table('data_bendahara_okps')->insert($data);
    }

    public function getNama($id)
    {
        return DB::table('data_bendahara_okps')
        ->join('okps', 'data_bendahara_okps.id_bend_umum','=','okps.id_bend_umum')
        ->where('data_bendahara_okps.id_bend_umum', $id)->first();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_pemuda extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('data_pemudas')->get();
    }
    public function addData($data)
    {
        DB::table('data_pemudas')->insert($data);
    }
    public function deleteData($id)
    {
        DB::table('data_pemuda')->where('id_data_pemuda', $id)->delete();
    }
    public function detailData($id)
    {
        DB::table('data_pemuda')->where('id_data_pemuda', $id)->first();
    }
    public function editData($id, $data)
    {
        DB::table('data_pemuda')->where('id_data_pemuda', $id)->update($data);
    }
}

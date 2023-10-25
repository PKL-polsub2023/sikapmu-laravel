<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_berita extends Model
{
    use HasFactory;
    public function allData()
    {
        return DB::table('data_beritas')->get();
    }
    public function detailData($id)
    {
        return DB::table('data_beritas')->where('id_berita', $id)->first();
    }
    public function addData($data)
    {
        DB::table('data_beritas')->insert($data);
    }
    public function editData($id, $data)
    {
        DB::table('data_beritas')->where('id_berita', $id)->update($data);
    }
    public function deleteData($id)
    {
        DB::table('data_beritas')->where('id_berita', $id)->delete();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class file_event extends Model
{
    use HasFactory;
    public function allData()
    {
        return DB::table('file_events')->get();
    }
    public function allDataEvent($id)
    {
        return DB::table('file_events')->where('id_event', $id)->get();
    }
    public function allDataUser()
    {
        return DB::table('file_events')->join('data_events', 'file_events.id_event', '=', 'data_events.id_event')->where('id_user', Auth::user()->id)->get();
    }
    public function DetailDatau($id)
    {
        return DB::table('file_events')->join('data_events', 'file_events.id_event', '=', 'data_events.id_event')->where('id_user', $id)->get();
    }
    public function detailData($id)
    {
        return DB::table('file_events')->where('file_events.id', $id)->first();
    }
    public function addData($data)
    {
        DB::table('file_events')->insert($data);
    }
    public function editData($id, $data)
    {
        DB::table('file_events')->where('id_file_event', $id)->update($data);
    }
    public function deleteData($id)
    {
        DB::table('file_events')->where('id_file_event', $id)->delete();
    }

    public function joinEvent($id)
    {
        return DB::table('file_events')->where('id_user', $id)->count();
    }
    public function deleteUser($id)
    {
        DB::table('file_events')->where('id_user', $id)->delete();
    }
    public function deleteEvent($id)
    {
        DB::table('file_events')->where('id_event', $id)->delete();
    }
}

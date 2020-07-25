<?php

namespace App\Helper;

use App\BlogCategory;
use App\StudentAttendance;
use Auth;
use Illuminate\Support\Facades\DB;

class Helpers
{
    public function isAdmin()
    {
        $data = DB::table('users')->where('email', Auth::User()->email)->where('role', 'admin')->first();

        if ($data) {
            return true;
        }
        return false;

    }

    public function isUser()
    {
        return DB::table('users')->where('email', Auth::User()->email)->where('role', 'user')->first();

    }
    public function findAll($tableName)
    {
        return DB::table($tableName)->get();
    }
    public function findAllDesc($tableName)
    {
        return DB::table($tableName)->orderBy('id', 'desc')->get();
    }
    public function findRandom($tableName)
    {
        return DB::table($tableName)->inRandomOrder()->get();
    }
    public function findFirst($tableName)
    {
        return DB::table($tableName)->first();
    }
    public function countTblData($tableName, $column, $data)
    {
        $allData = DB::table($tableName)->where($column, $data)->get();
        if ($allData->count() > 0) {
            return $allData->count();
        }
    }
    public function blogCategory()
    {
        return BlogCategory::all();
    }
    // public function schoolInfo()
    // {
    //     return DB::table('schools')->first();
    // }

    public function GetOptions($object, $column, $selected = 0, $id = 'id')
    {
        $option = '';
        if (empty($object)) {
            return "<option value = ''>No Data</option>";
        }
        foreach ($object as $obj) {
            $option .= "<option value = '{$obj->$id}' ";
            $option .= ($selected == $obj->$id) ? 'selected' : '';
            $option .= ">" . ucfirst($obj->$column) . "</option>";
        }

        return $option;
    }

    public function studentAttendance()
    {
        $studentAttendance = StudentAttendance::where('created_at', 'like', date('Y-m-d') . '%')->first();
        return $studentAttendance;
    }

    public function limit_text($text, $limit)
    {
        if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$limit]) . '...';
        }
        return $text;
    }

}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ebooks;

class EbooksController extends Controller
{
    //
    public function index() {
        $results = DB::table('ebooks')->get();
        return $results;
    }

    public function find_by_id($id) {
        $results = DB::table('ebooks')->get()->where('id',$id);
        return $results;
    }

    public function find_by_title($title) {
        $results = DB::table('ebooks')->get()->where('title',$title);
        return $results;
    }

    public function find_by_keterangan($keterangan) {
        $results = DB::table('ebooks')->get()->where('keterangan',$keterangan);
        return $results;
    }

    public function find_by_path($path) {
        $results = DB::table('ebooks')->get()->where('path',$path);
        return $results;
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Videos;

class VideosController extends Controller
{
    //
    public function index() {
        $results = DB::table('videos')->get();
        return $results;
    }

    public function find_by_id($id) {
        $results = DB::table('videos')->get()->where('id',$id);
        return $results;
    }

    public function find_by_channel($channel) {
        $results = DB::table('videos')->get()->where('channel',$channel);
        return $results;
    }

    public function find_by_keterangan($keterangan) {
        $results = DB::table('videos')->get()->where('keterangan',$keterangan);
        return $results;
    }

    public function find_by_path($path) {
        $results = DB::table('videos')->get()->where('path',$path);
        return $results;
    }
}

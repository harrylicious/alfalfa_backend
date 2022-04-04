<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Words;

class WordsController extends Controller
{
    //

    public function index() {
        $results = DB::table('words')->get();
        return $results;
    }

    public function find_by_id($id) {
        $results = DB::table('words')->get()->where('id',$id);
        return $results;
    }

    public function find_by_word($word) {
        $results = DB::table('words')->get()->where('word',$word);
        return $results;
    }

    public function find_by_meaning($meaning) {
        $results = DB::table('words')->get()->where('meaning',$meaning);
        return $results;
    }

    public function find_by_level($level) {
        $results = DB::table('words')->get()->where('LEVEL',$level);
        return $results;
    }
}

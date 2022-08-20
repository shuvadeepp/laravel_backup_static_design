<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\models\PropertylistModel;
use DB;
use PhpParser\Node\Expr\Print_;

class StaticController extends appController
{
    public function addData () {
        // echo 111;exit;
        return view('application.addData');
    }
    public function viewTable () {
        // echo 111;exit;
        return view('application.viewTable');
    }
}

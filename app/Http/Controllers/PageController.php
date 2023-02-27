<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function article(Request $request, $id){

        return "Halaman article dengan ID " . $id;
    }
}

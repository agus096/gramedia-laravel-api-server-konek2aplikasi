<?php

namespace App\Http\Controllers;

use App\Models\distribusi;
use Illuminate\Http\Request;

class DistribusiController extends Controller
{
    public function index () {
        $data = distribusi::all();

        return view('index', compact('data'));
    }
}

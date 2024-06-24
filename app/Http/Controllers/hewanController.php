<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class hewanController extends Controller
{
    public function showhewanForm()
    {
        return view('hewan', [
            "title" => "hewan"
        ]);
    }

    public function hewan(Request $request)
    {
        
    }
}


<?php


namespace App\Http\Controllers;

use App\Models\RandomNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

    public function retrieve($id)
    {
        $random_numbers = RandomNumber::find($id);
        if($random_numbers === null)
        {
            return view("404");
        }
        return view('number');
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RandomNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RandomNumbersController extends Controller
{
    public function RandomNumbersAll()
    {
        $random_numbers = RandomNumber::all();
        return response()->json($random_numbers);
    }

    public function generate(Request $request)
    {
        $random_number = RandomNumber::create([
            'number' => $request->number
        ]);
        return response()->json([
            'status' => true,
            'random_number' => $random_number
        ])->setStatusCode(201, "Random number is store");
    }

    public function retrieve($id)
    {
        $random_number = RandomNumber::find($id);
        if(!$random_number){
            return response()->json([
                "status" => false,
                "message" => "Post Not Found"
            ], 404);
        }
        return response()->json([$random_number, "date" => $random_number->created_at->format('Y-m-d G:i:s')]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TetapanController extends Controller
{
  public function getData(Request $request)
    {
        $roles = DB::select("
            SELECT id, name, 'test' AS description
            FROM roles
            WHERE true
        ");

        return response()->json(['data' => $roles]);
    }

}


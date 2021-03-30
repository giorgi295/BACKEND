<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function calculator(Request $request){
        $x = $request->numberOne;
        $y = $request->numberTwo;
        $action = $request->action;
        if ($action == 'sum' or $action == '1'){
            return $x + $y;
        } elseif ($action == 'subtraction' or $action == '2'){
            return $x - $y;
        } elseif ($action == 'multiplication' or $action == '3'){
            return $x * $y;
        } elseif ($action == 'division' or $action == '4'){
            return $x / $y;
        } else {
            return 'Choose one of this: 1.sum 2.subtraction 3.multiplication 4.division';
        }

    }
}

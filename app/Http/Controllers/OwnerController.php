<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function ownerEdited(Request $request){
        $allEdit = $request;
        dd($allEdit);
    }
}

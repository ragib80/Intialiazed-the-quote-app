<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserResourceCollection;

class UserController extends Controller
{
     public function index(Request $req){
        $query= $req->q;

        $user_data=DB::table('users')
        ->select('uuid',DB::raw('CONCAT(first_name,\' \',last_name) AS name'))
        ->where('first_name','LIKE', '%'.$query.'%')
        ->orWhere('last_name','LIKE', '%'.$query.'%')
        ->orWhere('email','LIKE', '%'.$query.'%')
        ->paginate(3);

        return new UserResourceCollection($user_data);

     }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\getUser;

class secretController extends Controller
{
    //
    public function init(Request $req){
        $code = $req->get('code');
        if ($code === "UG9ydG9mb2xpby1BZG1pbg==" || 1)
        {
            
            $data = getUser::paginate(5);
            // $data = "";
            return View::make('porto',['data' => $data]);

            //dd( $data );
        }
        else
        {
            return redirect(url(''));
        }
    }
    public function get($page = 5){
            $data = getUser::paginate($page);
            // $data = "";
            return View::make('porto',['data' => $data])->render();

            //dd( $data );
    }
}

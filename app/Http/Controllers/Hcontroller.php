<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class Hcontroller extends Controller
{
/**

 * Create a new controller instance.

 *
 * @return void

 */

    public function ajaxRequest()
    {

        return view('ajaxRequest');

    }

    /**
     * Create a new controller instance.
     *

     * @return void

     */

    public function ajaxRequestPost(Request $request)
    {
        $input = $request->all();
        //  echo json_encode($input);
         echo $input['name'];
         echo $input['password'];
         echo $input['email'];
        $data = User::create($input);
        // return response()->json(['success'=>'Record inserted successfully'], 200);

    }

}

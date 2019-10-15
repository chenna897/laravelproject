<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


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
          echo json_encode($input);
          echo $input['name'];
          echo '                    ';
          echo $input['email'];
          echo '                     ';
          echo $encrypted  = Crypt::encryptString($input['password']);
          echo '                                                    ';
          echo $decrypted = Crypt::decryptString($encrypted);
          echo '                                                    ';
          $input['password'] = $encrypted;
        //   echo $hashed = bcrypt($input['password']);
        //   $input['password'] = $hashed;
          $data = User::create($input);
          //return response()->json(['success'=>'Record inserted successfully'], 200);

    }

}

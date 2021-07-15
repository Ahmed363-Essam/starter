<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;


class usercontroller extends Controller
{
    public function showAdmin()
    {
        return 'ahmed emam';
    }

    public function getIndex()
    {
       /* $data=[];
        $data['id'] =5;
        $data['name'] ='noury';*/
     
      /*  $obj = new \stdClass();

        $obj->name='ahmed';
        $obj->id='10';
        $obj->gender='male';

        return view('welcome',compact('obj1'));*/

        $data=['ahmed','mohamed','kenzi'];

        return view('welcome',compact('data'));
    }
}

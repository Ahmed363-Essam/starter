<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;



class secondController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(middleware:'auth')->except(methods:'noury1');
    }


    function noury1()
    {
        return 'noury1';
    }

    
    function noury2()
    {
        return 'noury2';
    }
    
    function noury3()
    {
        return 'noury3';
    }
    
        
    function noury4()
    {
        return 'noury4';
    }
    



}

<?php

namespace App\Http\Controllers;

use inertia;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function gotoPage($page) 
    {
        $title=__('Metal Title'.$page);
        if($title== 'Metal Title' . $page)
        {
           $title=NULL;
        }       
        return view('pages.$page', ['title'=>$title]);       
    }    
    
    public function index()
    {        
        return view('index');
    }
}

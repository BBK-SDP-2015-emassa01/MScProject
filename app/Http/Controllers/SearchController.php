<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{

    public function index()
    {
        return view('search.index');
    }
    
     public function searchDo()
    {
        return view('search.do');
    }
    
     public function searchKnow()
    {
        return view('search.know');
    }
    
     public function searchGo()
    {
        return view('search.go');
    }
    
     public function searchSocial()
    {
        return view('search.social');
    }

}

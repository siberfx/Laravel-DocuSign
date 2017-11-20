<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * show form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showFormFile()
    {
        return view('file');
    }


    public function showOverflow()
    {
        return view('overflow');
    }
}

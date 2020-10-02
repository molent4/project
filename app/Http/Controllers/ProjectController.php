<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

class ProjectController extends Controller
{
    public function index(){

        $pages = Page::All();
        $pagedetail = Page::where('id', 1)->first();

        return view('website.home', ['pages' => $pages, 'pagedetail' => $pagedetail]);
    }

    public function page($pageid){

        $pages = Page::All();
        $pagedetail = Page::where('id', $pageid)->first();

        return view('website.home', ['pages' => $pages, 'pagedetail' => $pagedetail]);
    }
}

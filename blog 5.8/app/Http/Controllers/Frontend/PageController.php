<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view ('frontend.page.home');
    }

    public function home2()
    {
        return view ('frontend.page.home2');
    }

    public function home3()
    {
        return view ('frontend.page.home3');
    }

    public function product()
    {
        return view ('frontend.page.product');
    }
    
    public function productdetail()
    {
        return view ('frontend.page.productdetail');
    }
    public function cart()
    {
        return view ('frontend.page.cart');
    }

    public function blog()
    {
        return view ('frontend.page.blog');
    }  
    
    public function blogdetail()
    {
        return view ('frontend.page.blogdetail');
    }  
    
    public function about()
    {
        return view ('frontend.page.about');
    }  

    public function contact()
    {
        return view ('frontend.page.contact');
    }  

}

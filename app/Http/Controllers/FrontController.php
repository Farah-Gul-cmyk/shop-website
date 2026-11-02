<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ShopHelper;

class FrontController extends Controller
{
    public function index()
    {
        $data = ShopHelper::getHomeData();
        return view('home', $data);
    }

    public function about()
    {
        return view('about');
    }

    public function shop()
    {
        return view('shop');
    }

    public function contact()
    {
        return view('contact');
    }
}
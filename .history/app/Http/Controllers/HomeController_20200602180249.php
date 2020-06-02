<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Sitemap\SitemapGenerator;

class HomeController extends Controller
{
    //
    public function index()
    {
        SitemapGenerator::create('https://111-pr.com')->writeToFile('sitemap.xml');
        return view('home');
    }

}

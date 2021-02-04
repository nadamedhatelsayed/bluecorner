<?php

namespace App\Http\Controllers;

use App\aboutUs;
use App\blog;
use App\category;
use App\images;
use App\product;
use App\requests;
use App\services;
use App\slider;
use App\team;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        $sliders = slider::all();
        $services = services::all();
        $aboutus = aboutUs::all();
        $categories = category::all();
        $products = product::all();
        $blogs = blog::all();
        $images = images::all();
        return view('master.index', compact('sliders', 'services', 'aboutus', 'categories', 'products', 'blogs', 'images'));
    }

    public function about()
    {
        $aboutus = aboutUs::all();
        $teams = team::all();
        $images = images::all();
        $services = services::all();
        return view('master.about', compact('aboutus', 'teams', 'images', 'services'));
    }

    public function gallery()
    {
        $projects = product::all();
        $categories = category::all();
        $products = product::all();
        $images = images::all();
        $aboutus = aboutUs::all();

        return view('master.products', compact('projects', 'images', 'categories', 'products','aboutus'));
    }

    public function blog()
    {
        $blogs = blog::all();
        $products = product::all();
        $images = images::all();
        $aboutus = aboutUs::all();
        return view('master.blog', compact('blogs', 'products', 'images','aboutus'));
    }

    public function contactUs()
    {
        $requests = requests::all();
        $aboutus = aboutUs::all();
        $products = product::all();
        $images = images::all();
        return view('master.contactUs', compact('requests', 'aboutus', 'products', 'images'));

    }

}

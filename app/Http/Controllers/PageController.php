<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('FrontModule.home');
    }

    public function about_company()
    {
        return view('FrontModule.aboutCompany');
    }

    public function services()
    {
        return view('FrontModule.services');
    }

    public function contact()
    {
        return view('FrontModule.contact');
    }

    public function privacy_policy()
    {
        return view('FrontModule.privacyPolicy');
    }

    public function terms_and_conditions()
    {
        return view('FrontModule.termsAndConditions');
    }

    public function client()
    {
        return view('ClientModule.home');
    }
}

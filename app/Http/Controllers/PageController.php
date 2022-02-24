<?php

namespace App\Http\Controllers;

use App\Models\EnmuMj;
use App\Models\EnumMj;
use App\Models\EnumVat;
use App\Models\EnumZip;
use App\Models\EnumCity;
use App\Models\EnumState;
use App\Models\InvoiceItem;
use Illuminate\Http\Request;
use App\Models\EnumBankAccount;

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

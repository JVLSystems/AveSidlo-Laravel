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
    /**
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('FrontModule.home');
    }

    /**
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function aboutcompany()
    {
        return view('FrontModule.aboutCompany');
    }

    /**
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function services()
    {
        return view('FrontModule.services');
    }

    /**
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function contact()
    {
        return view('FrontModule.contact');
    }

    /**
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function privacyPolicy()
    {
        return view('FrontModule.privacyPolicy');
    }

    /**
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function termsAndConditions()
    {
        return view('FrontModule.termsAndConditions');
    }

    /**
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function client()
    {
        return view('ClientModule.home');
    }
}

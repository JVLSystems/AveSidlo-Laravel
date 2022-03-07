<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\EnumState;
use App\Services\OrSR\Fields\BusinessId;
use App\Services\OrSR\Parser;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Arr;

class CompanyController extends Controller
{

    public function __construct()
    {
        // $this->authorizeResource(Company::class, 'company');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('ClientModule.company.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('ClientModule.company.add', [
            'states' => EnumState::all()
        ] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        Company::insertOrUpdate($request);

        return redirect()->route('spolocnosti.index')->withStatus('Spoločnosť bola úspešne vytvorená, do e-mailu sme Vám zaslali platobné podmienky.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Company $company)
    {
        return view('ClientModule.company.edit', [
            'company' => $company,
            'states' => EnumState::all()
        ] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, Company $company)
    {
        Company::insertOrUpdate($request, $company, 'update');

        return redirect()->route('spolocnosti.index')->withStatus('Spoločnosť bola úspešne aktualizovaná.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->zip()->delete();

        $company->city()->delete();

        $company->delete();

        return redirect()->route('spolocnosti.index')->withStatus('Spoločnosť bola úspešne vymazaná.');
    }

    public function getCompanyDetailByIco($ico)
    {
        $company = new Parser();
        $results = $company->find(new BusinessId($ico))->getResults();

        return $results
            ? response()->json(Arr::first($results), 200)
            : response()->json(['status' => 'not found'], 404);
    }
}

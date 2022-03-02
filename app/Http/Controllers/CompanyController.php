<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\EnumZip;
use App\Models\EnumCity;
use App\Models\EnumState;
use App\Services\OrSR\Fields\BusinessId;
use App\Services\OrSR\Parser;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Arr;

class CompanyController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Company::class, 'spolocnosti');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ClientModule.company.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = EnumState::all();

        return view('ClientModule.company.add', compact('states') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $city = EnumCity::create([
            'name' => $request->city,
        ]);

        $zip = EnumZip::create([
            'name' => $request->zip,
        ]);

        Company::create([
            'user_id' => auth()->id(),
            'city_id' => $city->id,
            'zip_id' => $zip->id,
            'state_id' => $request->state,
            'name' => $request->name,
            'ico' => $request->ico,
            'dic' => $request->dic,
            'icdph' => $request->icdph,
            'street' => $request->address,
        ]);

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
     * @param  \App\Models\Company  $spolocnosti
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $spolocnosti)
    {
        $states = EnumState::all();

        return view('ClientModule.company.edit', compact('spolocnosti', 'states') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $spoocnosti
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, Company $spolocnosti)
    {
        $spolocnosti->zip()->update([
            'name' => $request->zip,
        ]);

        $spolocnosti->city()->update([
            'name' => $request->city,
        ]);

        $spolocnosti->update([
            'state_id' => $request->state,
            'name' => $request->name,
            'ico' => $request->ico,
            'dic' => $request->dic,
            'icdph' => $request->icdph,
            'street' => $request->address,
        ]);

        return redirect()->route('spolocnosti.index')->withStatus('Spoločnosť bola úspešne aktualizovaná.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $spolocnosti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $spolocnosti)
    {
        $spolocnosti->zip()->delete();

        $spolocnosti->city()->delete();

        $spolocnosti->delete();

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

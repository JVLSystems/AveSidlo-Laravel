<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        User::updateUser($request, $user);

        return redirect()->route('my.account')->withStatus('Váš účet bol aktualizovaný!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    /**
     * Show the form for personal settings.
     *
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function my_account()
    {
        return view('ClientModule.client.myAccount');
    }

    /**
     * Show the form for settings.
     *
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function settings()
    {
        return view('ClientModule.client.settings');
    }

    /**
     * Show the form for change password.
     *
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function change_password()
    {
        return view('ClientModule.client.changePassword');
    }
}

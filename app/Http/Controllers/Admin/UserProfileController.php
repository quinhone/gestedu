<?php

namespace SON\Http\Controllers\Admin;

use SON\Forms\UserProfileForm;
use SON\Models\User;
use Illuminate\Http\Request;
use SON\Http\Controllers\Controller;

class UserProfileController extends Controller
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
     * @param  \SON\Models\UserProfiles  $userProfiles
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfiles $userProfiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SON\Models\User  $userProfiles
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $form = \FormBuilder::create(UserProfileForm::class, [
            'url' => route('admin.users.profile.update', ['user' => $user->id]),
            'method' => 'PUT',
            'model' => $user->profile,
            'data' => ['user' => $user]
        ]);

        return view('admin.users.profile.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SON\Models\UserProfiles  $userProfiles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $form = \FormBuilder::create(UserProfileForm::class);

        if(!$form->isValid()){
            return redirect()
                ->back()
                ->withErrors($form->getErrors())
                ->withInput();
        }

        $data = $form->getFieldValues();
        $user->profile->address?$user->profile->update($data):$user->profile()->create($data);

        $request->session()->flash('message', 'Perfil alterado com sucesso!');

        return redirect()->route('admin.users.profile.update', ['user' => $user->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SON\Models\UserProfiles  $userProfiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfiles $userProfiles)
    {
        //
    }
}

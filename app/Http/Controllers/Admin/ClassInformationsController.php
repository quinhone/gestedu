<?php

namespace SON\Http\Controllers\Admin;

use SON\Forms\ClassInformationForm;
use SON\Models\ClassInformation;
use Illuminate\Http\Request;
use SON\Http\Controllers\Controller;

class ClassInformationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class_info = ClassInformation::paginate();
        return view('admin.class_informations.index', compact('class_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = \FormBuilder::create(ClassInformationForm::class, [
            'url' => route('admin.class_informations.store'),
            'method' => 'POST'
        ]);

        return view('admin.class_informations.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = \FormBuilder::create(ClassInformationForm::class);

        if(!$form->isValid()){
            return redirect()->back()
                ->withErrors($form->getErrors())
                ->withInput();
        }

        $data = $form->getFieldValues();

        ClassInformation::create($data);

        $request->session()->flash('message', 'Turma criada com sucesso!');

        return redirect()->route('admin.class_informations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \SON\Models\ClassInformation  $classInformation
     * @return \Illuminate\Http\Response
     */
    public function show(ClassInformation $class_information)
    {
        return view('admin.class_informations.show', compact('class_information'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SON\Models\ClassInformation  $classInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassInformation $classInformation)
    {
        $form = \FormBuilder::create(ClassInformationForm::class, [
            'url' => route('admin.class_informations.update', ['subject' => $classInformation->id]),
            'method' => 'PUT',
            'model' => $classInformation
        ]);

        return view('admin.class_informations.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SON\Models\ClassInformation  $classInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassInformation $classInformation)
    {
        $form = \FormBuilder::create(ClassInformationForm::class);

        if(!$form->isValid()){
            return redirect()
                ->back()
                ->withErrors($form->getErrors())
                ->withInput();
        }

        $data = $form->getFieldValues();
        $classInformation->update($data);

        $request->session()->flash('message', 'Turma editada com sucesso!');

        return redirect()->route('admin.class_informations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SON\Models\ClassInformation  $classInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassInformation $classInformation)
    {
        $classInformation->delete();
        $classInformation->session()->flash('message', 'Turma excluída com sucesso!');
        return redirect()->route('admin.class_informations.index');
    }
}

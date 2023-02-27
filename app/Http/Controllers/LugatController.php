<?php

namespace App\Http\Controllers;

use App\Http\Requests\LugatRequest;
use App\Models\Lugat;
use Illuminate\Http\Request;
use Inertia\Inertia;
use function Termwind\render;

class LugatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Inertia\Response
    {
        $lugatlar = Lugat::orderBy('id', 'DESC')->get();

        return Inertia::render('Lugat/index', [
            'title' => ' a',
            'lugatlar' => $lugatlar,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Inertia\Response
    {
        return Inertia::render('Lugat/create', [
            'title' => 'Lugat edit',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LugatRequest $request): \Illuminate\Http\RedirectResponse
    {
         Lugat::create([
             'antro'=>$request->antro,
             'manosi'=>$request->manosi,
         ]);

         return redirect()->to('/lugat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): \Inertia\Response
    {
        $edit = Lugat::find($id);
        return Inertia::render('Lugat/edit', [
            'title' => 'Lugat edit',
            'edit' => $edit,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): \Illuminate\Http\RedirectResponse
    {
        $edit = Lugat::find($id);
        $edit->antro = $request->antro;
        $edit->manosi =$request->manosi;
        $edit->save();
        return redirect()->to('/lugat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\RedirectResponse
    {
        Lugat::destroy($id);
        return redirect()->to('/lugat');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Loyiha;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LoyihaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loyihalar = Loyiha::all();


        return Inertia::render('Loyiha/index', [
            'title' => ' a',
            'loyihalar' => $loyihalar,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Loyiha/create', [
            'title' => 'Loyiha edit',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Loyiha::create([
            'title'=>$request->title,
            'descriptions'=>$request->descriptions,
        ]);

        return redirect()->to('/loyihe');
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
    public function edit(string $id)
    {
        $edit = Loyiha::find($id);
        return Inertia::render('Loyiha/edit', [
            'title' => 'Loyiha edit',
            'edit' => $edit,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $edit = Loyiha::find($id);
        $edit->title = $request->title;
        $edit->descriptions =$request->descriptions;
        $edit->save();
        return redirect()->to('/loyihe');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Loyiha::destroy($id);
        return redirect()->to('/loyihe');
    }
}

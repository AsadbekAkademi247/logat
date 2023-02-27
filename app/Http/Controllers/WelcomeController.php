<?php

namespace App\Http\Controllers;

use App\Models\Loyiha;
use App\Models\Lugat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class WelcomeController extends Controller
{



    public function index(Request $request): \Inertia\Response
    {
        $all = DB::table('lugats')->orderBy('id','ASC')->paginate(6);
        return Inertia::render('Welcome', [
            'title'=>"Antroposentrik tilshunoslik terminlarining izohli lug'ati",
            'all'=>$all,
            'find'=>$request->find,
        ]);
    }

    public function find($id): \Inertia\Response
    {
        if($id){

            $all = DB::table('lugats')
                ->where('antro' ,'LIKE',"$id%")
                ->orderBy('antro')
                ->paginate(6);
        }else{
            $all = DB::table('lugats')->orderBy('id','ASC')->paginate(6);
        }

        return Inertia::render('Welcome', [
            'title'=>"Antroposentrik tilshunoslik terminlarining izohli lug'ati",
            'all'=>$all,
            'find'=>$id,
        ]);
    }

    public function loyiha(){

         $all = Loyiha::all();
        return Inertia::render('Loyiha', [
            'title'=>"Antroposentrik tilshunoslik terminlarining izohli lug'ati",
            'all'=>$all,
        ]);
    }

    public function contact(){
        return Inertia::render('Contact',[
            'title'=>"Antroposentrik tilshunoslik terminlarining izohli lug'ati",
        ]);
    }

    public function alphabet($id): \Inertia\Response
    {
         $all =  DB::table('lugats')
             ->where('antro' ,'LIKE',"$id%")
             ->paginate(6);
        return Inertia::render('Welcome', [
            'title'=>"Antroposentrik tilshunoslik terminlarining izohli lug'ati",
            'all'=>$all,
            'find'=>$id,
        ]);
    }
}

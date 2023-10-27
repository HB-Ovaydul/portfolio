<?php

namespace App\Http\Controllers\portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfoiloController extends Controller
{
   public function home()
   {
       $data = file_get_contents(storage_path('app/data/home.json'));
       $expriences = file_get_contents(storage_path('app/data/exprience.json'));
        return view('project.index',compact('data','expriences'));
    }

    public function workExprience()
    {
        $data = file_get_contents(storage_path('app/data/home.json'));
        $expriences = file_get_contents(storage_path('app/data/exprience.json'));
        return view('project.exprience',[
            'data' => $data,
            'expriences' => $expriences
            ]
        );
    }
    public function project()
    {
        $data = file_get_contents(storage_path('app/data/home.json'));
        $project = file_get_contents(storage_path('app/data/project.json'));
        return view('project.project', compact('data','project'));
    }
    public function singlePage()
    {
        return view('project.single');
    }
}

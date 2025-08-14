<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class SearchController extends Controller
{
    #[NoReturn]
    public function __invoke()
    {
        $jobs = Jobs::where('title', 'LIKE', '%' . request('q') . '%');
        //return view('components.results',['jobs'=>$jobs]);
            return ('hello');
    }
}

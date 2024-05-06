<?php

namespace App\Http\Controllers;

use App\Models\JobList;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        if($request->has('search')){

            $search = $request->input('search');
            $results = JobList::where('title', 'like', '%' . $search . '%')->get();
            // return response()->json(['results' => $results]);
            return view('search.results', ['results' => $results]);

        }
    }
}

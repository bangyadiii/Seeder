<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $search = User::latest();

        $result = $search->where('username', 'like', '%' .request('search').'%')
                         ->orWhere('name', 'like', '%' .request('search').'%')->get();

        if ($result != null) {
            return view('search-result', ['results' => $result]);
        }

    }
}

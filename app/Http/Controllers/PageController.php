<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() { return view('pages.home'); }
    public function about() { return view('pages.about'); }
    public function services() { return view('pages.services'); }
    public function businesses() { return view('pages.businesses'); }

    public function contact(Request $request)
    {
        $options = array_merge(
            array_column(config('jvs.services'), 'name'),
            array_column(config('jvs.businesses'), 'name')
        );
        $selected = in_array($request->query('service'), $options, true) ? $request->query('service') : '';
        return view('pages.contact', compact('options', 'selected'));
    }
}

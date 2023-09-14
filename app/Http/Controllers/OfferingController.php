<?php

namespace App\Http\Controllers;

use App\Models\offering;
use Illuminate\Http\Request;

class OfferingController extends Controller
{
    public function index()
    {
        $newoffering = offering::all();
        return view('offerings.index', ['offerings' => $newoffering]);
    }

    public function create()
    {
        return view('offerings.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([

            'date' => 'required|date',
            'amount' => 'required|string',
            'chapel' => 'required|string',

        ]);

        $newoffering = offering::create($data);

        return redirect(route('offering.index'));
    }

    public function edit(offering $offering)
    {
        return view('offerings.edit',  ['offerings' => $offering]);
    }

    public function update(offering $offering, Request $request)
    {

        $data = $request->validate([
            'date' => 'required|date',
            'amount' => 'required|string',
            'chapel' => 'required|string',
        ]);

        $offering->update($data);

        return redirect(route('offering.index'));
    }

    public function delete ($id){
        
        $newoffering = offering::find($id);

        $newoffering -> delete();

        return redirect(route('offering.index'));
    }

}

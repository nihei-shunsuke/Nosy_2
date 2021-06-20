<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class PlanController extends Controller
{
    public function index(Plan $plan)
    {
        return view('index');
    }

    public function create(Plan $plan)
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // $input = $request['input'];
        // $rules = [
        //     'start_time' => ['required', 'integer'],
        //     'end_time' => ['required', 'integer']
        // ];
        // $this->validate($request, $rules);
        // $plan->fill($input)->save();
        return view('create');
    }

    // public function show($id)
    // {
    //     return response(Plan::find($id));
    // }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $input = $request['plan'];
        $rules = [
            'start_time' => ['required', 'integer'],
            'end_time' => ['required', 'integer']
        ];
        $this->validate($request, $rules);
        $plan->fill($input)->save();
        return $input;
    }

    public function destroy($id)
    {
        $plan->delete();
    }
}

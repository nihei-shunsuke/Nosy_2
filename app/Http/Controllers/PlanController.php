<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class PlanController extends Controller
{
    // public function index(Plan $plan)
    // {
    //     return view('index');
    // }

    public function create(Plan $plan)
    {
        $plans = \App\Plan::get();
        return $plans;
    }

    public function store(Request $request, Plan $plan)
    {
        $input = $request['plan'];
        $plan->fill($input)->save();
        return $input;
    }

    // public function show($id)
    // {
    //     return response(Plan::find($id));
    // }

    public function update(Request $request, $id)
    {
        $input = $request['plan'];
        $plan->fill($input)->save();
        return $input;
    }

    public function destroy($id)
    {
        $plan->delete();
    }
}

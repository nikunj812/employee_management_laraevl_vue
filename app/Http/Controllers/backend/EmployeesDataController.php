<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Department;

class EmployeesDataController extends Controller
{
    public function countries()
    {
        $countries = Country::all();
        return response()->json($countries);
    }

    public function states(Country $country)
    {
        return response()->json($country->state);
    }
    public function cities(State $state)
    {
        return response()->json($state->city);
    }
    public function departments()
    {
        $departments = Department::all();
        return response()->json($departments);
    }

}

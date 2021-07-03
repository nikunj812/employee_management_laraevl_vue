<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Requests\EmployeeStoreRequest;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\EmployeeSingleResource;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $employees = Employee::all();
        if($request->has('search')){
           $employees = Employee::where('first_name', 'like' , "%{$request->search}%")->orwhere('last_name', 'like',"%{$request->search}%")->get();
        }
        return EmployeeResource::collection($employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeStoreRequest $request)
    {
        $validated = $request->validated();
        $employee = Employee::create($validated);
        return response()->json($employee);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return new EmployeeSingleResource($employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeStoreRequest $request, Employee $employee)
    {
        $validated = $request->validated();
        $employee->update($validated);

        return response()->json('Employee Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee) 
    {
        $employee->delete();

        return response()->json('Employee deleted Successfully');
    }
}

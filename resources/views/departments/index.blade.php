@extends('layouts.main')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Department</h1>
</div>
<div class="container">
    <div class="row justify-content-center">
    <div class="row">
        <div class="card mx-auto">
            <div>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            </div>
            @endif
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form action="{{route('departments.index')}}" method="GET">
                            <div class="form-row align-item-center">
                                <div class="col">
                                    <input type="text" name="search" class="form-control mb-2" placeholder="Search"/>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary mb-2">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                <div>
                    <a href="{{route('departments.create')}}" class="btn btn-primary mb-2">Create</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Department Name</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($departments as $department)
                      <tr>
                        <th scope="row">{{$department->id}}</th>
                        <td>{{$department->name}}</td>
                        <td><a href="{{route('departments.edit', $department->id)}}" class="float-right"><button type="button" class="btn btn-secondary">Edit</button></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

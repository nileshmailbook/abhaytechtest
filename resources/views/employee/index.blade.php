@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Employee Name</th>
                                <th>Employee Email</th>
                                <th>Employee Designation</th>
                                <th>System Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($all as $employee)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$employee->name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->designation}}</td>
                                <td>{{$employee->role}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{route('employee.show',[$employee->id])}}">
                                    View
                                    </a>
                                     <a class="btn btn-success btn-sm" href="{{route('employee.edit',[$employee->id])}}">
                                    Edit
                                    </a>
                                     <a class="btn btn-danger btn-sm" href="{{route('employee.show',[$employee->id])}}" onclick="event.preventDefault();
                                                     document.getElementById('delete-employee').submit();">

                                    delete
                                    </a>
                                    <form id="delete-employee" action="{{ route('employee.delete',[$employee->id]) }}" method="post" style="display: none;">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>                                
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

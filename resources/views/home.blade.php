@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
             @if (session('error'))
                        <div class="alert alert-error" role="alert">
                            Warning : {{ session('error') }}
                        </div>
                    @endif
            <div class="card">
                <div class="card-header">Employee Dashboard</div>

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
                                <th> Name</th>
                                <th> Email</th>
                                <th> Designation</th>                                
                                <th> Designation</th>
                                <th>System Role</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>#</td>
                                <td>{{Auth::user()->name}}</td>
                                <td>{{Auth::user()->email}}</td>
                                <td>{{Auth::user()->designation}}</td>
                                <td>{{Auth::user()->role}}</td>
                                                    
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

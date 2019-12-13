@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            <div class="card">

                <div class="card-header">{{ __('View') }} <a href="{{route('employee.index')}}" class="btn btn-sm btn-primary">Back</a></div>

                <div class="card-body">
                    
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $employee->name }}" autocomplete="name" autofocus>

                                
                            </div>
                        </div>
                         
                         
                  

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $employee->email }}" autocomplete="email">

                                
                            </div>
                        </div>

                        
                   
 

 

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ $employee->mobile }}"  autocomplete="mobile">

                                 
                            </div>
                        </div>
                    

              

                        <div class="form-group row">
                            <label for="designation" class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>

                            <div class="col-md-6">
                                <input id="designation" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{ $employee->designation }}"  autocomplete="designation">

                          
                            </div>
                        </div>
                      

 

                        <div class="form-group row">
                            <label for="salary" class="col-md-4 col-form-label text-md-right">{{ __('Salary') }}</label>

                            <div class="col-md-6">
                                <input id="salary" type="text" class="form-control @error('salary') is-invalid @enderror" name="salary" value="{{ $employee->salary }}"  autocomplete="salary">
 
                            </div>
                        </div>
                    
                   

                   

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $employee->address }}"  autocomplete="address">
                            </div>
                        </div>


                    

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('System Role') }}</label>

                            <div class="col-md-6">
                                <select name="role" id="inputRole" class="form-control" >
                                    <option @if($employee->role == 'employee') selected @endif>employee</option>
                                    <option @if($employee->role== 'admin') selected @endif>admin</option>
                                </select>                                 
                            </div>
                        </div>
                    </div>

                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

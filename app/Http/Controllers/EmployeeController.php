<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRequest;
use App\Http\Requests\NameRequest;
use App\Http\Requests\EmailRequest;
use App\Http\Requests\MobileRequest;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\AddressRequest;
use App\Http\Requests\SalaryRequest;
use App\Http\Requests\DesignationRequest;
use App\Http\Requests\RoleRequest;

class EmployeeController extends Controller
{   
    public function __construct()
    {
        $this->middleware(['auth','checkrole']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('employee.index',['all'=> User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        User::create($request->all());
        return redirect()->back()->with('status','employee created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('employee.show',['employee'=> User::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('employee.edit',['employee'=> User::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function updateName(NameRequest $request,$id)
    {
        User::findOrFail($id)->fill($request->all())->save();
        return redirect()->back()->with('status','Name updated');
    }
    public function updateEmail(EmailRequest $request,$id)
    {
        User::findOrFail($id)->fill($request->all())->save();
        return redirect()->back()->with('status','Email updated');
    }
    public function updatePassword(PasswordRequest $request,$id)
    {
        User::findOrFail($id)->fill($request->all())->save();
        return redirect()->back()->with('status','password updated');
    }
    public function updateSalary(SalaryRequest $request,$id)
    {
        User::findOrFail($id)->fill($request->all())->save();
        return redirect()->back()->with('status','salary updated');
    }
    public function updateMobile(MobileRequest $request,$id)
    {
        User::findOrFail($id)->fill($request->all())->save();
        return redirect()->back()->with('status','Mobile updated');
    }
    public function updateAddress(AddressRequest $request,$id)
    {
        User::findOrFail($id)->fill($request->all())->save();
        return redirect()->back()->with('status','Address updated');
    }
    public function updateRole(RoleRequest $request,$id)
    {
        User::findOrFail($id)->fill($request->all())->save();
        return redirect()->back()->with('status','role updated');
    }
    public function updateDesignation(DesignationRequest $request,$id)
    {
        User::findOrFail($id)->fill($request->all())->save();
        return redirect()->back()->with('status','designation updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('status','employee deleted');
    }
}

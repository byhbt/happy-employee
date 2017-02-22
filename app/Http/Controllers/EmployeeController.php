<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\AddEmployee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get list of employee
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();

        $viewData = [
            'employees' => $employees
        ];

        return view('employee.index', $viewData);
    }

    /**
     * Add new employee
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('employee.add');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AddEmployee $request)
    {
        dd($request->all());
        
        Employee::created();

        return redirect()->back();
    }
    /**
     * Add new employee
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('employee.edit');
    }


    /**
     * Show general calendar
     *
     * @return \Illuminate\Http\Response
     */
    public function calendar()
    {
        return view('employee.calendar');
    }
}

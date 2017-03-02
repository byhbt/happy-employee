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
        $employees = Employee::orderBy('created_at', 'DESC')->get();

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
     * @param \App\Http\Requests\AddEmployee $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AddEmployee $request)
    {
        $postData = $request->except('_token');

        Employee::createEmployee($postData);

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

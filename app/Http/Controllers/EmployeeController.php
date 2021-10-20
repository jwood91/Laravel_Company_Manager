<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
	{
	    $this->middleware('auth');
	}




    public function index()
    {
        $employees = Employee::with('company')->sortable()->filter(request(['search']))->paginate(10);

       return View('employees.index', compact('employees'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $companies = Company::orderBy('company_name')->get();
        return View('employees.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {//// validate
    // read more on validation at http://laravel.com/docs/validation
    $request->validate([
        'first_name'   => 'required',
        'last_name' => 'required',
        'email'      => 'required|email',
        'phone' => 'required',
        'company_id' => 'required',

    ]);



     Employee::create($request->all());

     return redirect()->back()->with('message', 'Employee Added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $employee = Employee::find($id);
      $companyId= $employee->company_id;

      $companies = Company::where('id', $companyId)->paginate(5);
      return view('employees.show', compact('employee', 'companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $employee = Employee::find($id);
        $companies = Company::orderBy('company_name')->get();
         return View('employees.edit', compact('companies', 'employee' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $employee = Employee::find($id);

      $attributes = $request->validate([
          'first_name'   => 'required',
          'last_name' => 'required',
          'email'      => 'required|email',
          'phone' => 'required',
          'company_id' => 'required',

      ]);



       $employee->update($attributes);

       return redirect()->back()->with('message', 'Employee Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $employee = Employee::find($id);
      $employee->delete();

      // redirect
      session()->flash('message', 'Successfully deleted the employee!');
      return redirect(route('employees.index'));

    }
  }

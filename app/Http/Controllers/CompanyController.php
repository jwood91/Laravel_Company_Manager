<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Company;
use App\Models\Employee;

class CompanyController extends Controller
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
      $companies = Company::sortable()->filter(request(['search']))->paginate(10);
        return View('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return View('companies.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //// validate
        // read more on validation at http://laravel.com/docs/validation
      $attributes =  $request->validate([
          'company_name' => [
                'required',
                'max: 255',

                ],

            'email' => [
                'email',
                'required',
                'max: 255',
                ],

            'website' => [
                'url',
                'required',
                'max: 255'
                ],

            'logo' => [
                'file',
                'dimensions: min_width=100,min_height=100',
                ],
        ]);
        $path = $request->file('logo')->store('public/images');


        $attributes['logo'] = $path;

        Company::create($attributes);

         return redirect()->back()->with('message', 'Company Added Successfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $employees = Employee::where('company_id', $id)->paginate(5);
        $company = Company::findOrFail($id);
        return view('companies.show', compact('employees','company'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('companies.edit', compact('company'));

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
      // dd(request('logo'));
      $company = Company::find($id);

      $attribues = $request->validate([
                'company_name' => [
                      'required',
                      'max: 255',

                      ],

                  'email' => [
                      'required',
                      'max: 255',
                      ],

                  'website' => [
                      'string',
                      'required',
                      'max: 255'
                      ],

                  'logo' => [
                      'file',
                      'dimensions: min_width=100,min_height=100',
                      ],

            ]);


      $attributes['logo'] = request('logo')->store('/public/images');


      $company->update($attributes);

       return redirect()->back()->with('message', 'Company Edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $company = Company::find($id);
      $company->employee()->delete();
      $company->delete();

      // redirect
      session()->flash('message', 'Successfully deleted the company and its employees!');
      return redirect(route('companies.index'));

          }
      }

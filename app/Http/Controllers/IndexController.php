<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Company;
use App\Models\Employee;


class IndexController extends Controller {

  public function companyIndex()
  {
    $companies = Company::paginate(10);
      return View('companies', compact('companies'));

  }
  public function  employeeIndex() {
       $employees = Employee::paginate(10);
        return View('employees', compact('employees'));
      }
}

<div id="outer">
  <div id="inner">

    <table class="table table-sm table-responsive-md w-100 table-bordered table-hover">
                            <thead class="text-center thead-light">
                                <tr>
                                    <th class="align-middle main-column">Employee ID</th>
                                    <th class="align-middle main-column">First Name</th>
                                    <th class="align-middle main-column">Last Name</th>
                                    <th class="align-middle main-column">Company Name</th>
                                    <th class="align-middle main-column">Email</th>
                                    <th class="align-middle main-column">Phone</th>
                                    <th class="align-middle main-column">Empty</th>
                                    <th id="links-header" class="align-middle links-column links-header">Links</th>
                                </tr>
                            </thead>

                            <tbody class="list">
                                @foreach ($employees as $employee)
                                  <?php $employeeCompany = $employee->company->company_name;?>
                                  <tr>
                                <tr>
                                    <td class="align-middle main-column"> {{ $employee->id}} </td>
                                    <td class="align-middle main-column"> {{ $employee->first_name }} </td>
                                    <td class="align-middle main-column"> {{ $employee->last_name }} </td>
                                    <td class="align-middle main-column"> {{ $employeeCompany }} </td>
                                    <td class="align-middle main-column"> {{ $employee->email}} </td>
                                    <td class="align-middle main-column"> {{ $employee->phone}} </td>
                                    <td id="empty" class="align-middle empty">Empty</td>
                                    <td class="align-middle employee-links links-column links-data">
                                      <div class="links-div">
                                           <a class="btn btn-primary table-link" title="View" href="{{ route('employees.show', $employee->id) }}"><i class="far fa-eye tooltiptext"></i></a>
                                           <a class="btn btn-primary table-link"  title="Edit" href="{{ route('employees.edit', $employee->id) }}"><i class="far fa-edit tooltiptext"></i></a>
                                       </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

          </table>
        </div>
      </div>
      {{ $employees->links() }}

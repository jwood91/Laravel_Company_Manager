<div id="outer">
  <div id="inner" class="card">

    <table class="card-body p-0 m-0 table table-sm w-100 table-responsive-md table-bordered table-hover">
                            <thead class="text-center thead-dark">
                                <tr>
                                    <th class="align-middle main-column">@sortablelink('id', ' ID', ['parameter' => 'smile'], ['class' => 'sort-link'])</th>
                                    <th class="align-middle main-column">@sortablelink('first_name', 'First Name', ['parameter' => 'smile'], ['class' => 'sort-link'])</th>
                                    <th class="align-middle main-column">@sortablelink('last_name', 'Last Name', ['parameter' => 'smile'], ['class' => 'sort-link'])</th>
                                    <th class="align-middle main-column">@sortablelink('company.company_name', 'Company Name', ['parameter' => 'smile'], ['class' => 'sort-link'])</th>
                                    <th class="align-middle main-column">@sortablelink('email', 'Email', ['parameter' => 'smile'], ['class' => 'sort-link'])</th>
                                    <th class="align-middle main-column">@sortablelink('phone', 'Phone', ['parameter' => 'smile'], ['class' => 'sort-link'])</th>
                                    <th class="align-middle main-column" style="width:100px; visibility: hidden;">Empty</th>
                                    <th id="links-header" class="align-middle links-column links-header">Links</th>
                                </tr>
                            </thead>

                            <tbody class="list">
                                @foreach ($employees as $employee)
                              <tr class="employee-tr">
                                    <td class="align-middle main-column"> {{ $employee->id}} </td>
                                    <td class="align-middle main-column"> {{ $employee->first_name }} </td>
                                    <td class="align-middle main-column"> {{ $employee->last_name }} </td>
                                    <td class="align-middle main-column"> {{ $employee->company->company_name }} </td>
                                    <td class="align-middle main-column"> {{ $employee->email}} </td>
                                    <td class="align-middle main-column"> {{ $employee->phone}} </td>
                                    <td id="empty" class="align-middle empty">Empty</td>
                                    <td id="table-links" class="align-middle employee-links links-column links-data p-0 m-0">
                                      <div  class="links-div">
                                           <a class="btn btn-success table-link" {{Popper::arrow()->pop('View')}} href="{{ route('employees.show', $employee->id) }}"><i class="far fa-eye tooltiptext"></i></a>
                                           <a class="btn btn-success table-link"  {{Popper::arrow()->pop('Edit')}} href="{{ route('employees.edit', $employee->id) }}"><i class="far fa-edit tooltiptext"></i></a>
                                       </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
      {!! $employees->appends(request()->except('page'))->render() !!}
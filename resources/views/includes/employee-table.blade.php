
<table class="table table-striped w-100 table-bordered table-hover">
                        <thead class="text-center thead-dark">
                            <tr>
                                <th class="align-middle">Employee ID</th>
                                <th class="align-middle">First Name</th>
                                <th class="align-middle">Last Name</th>
                                <th class="align-middle">Company ID</th>
                                <th class="align-middle">Email</th>
                                <th class="align-middle">Phone</th>
                            </tr>
                        </thead>

                        <tbody class="list">
                            @foreach ($employees as $employee)
                              <tr>
                            <tr><a href="/employee-profile">
                                <td class="align-middle"> {{ $employee->id}} </td>
                                <td class="align-middle"> {{ $employee->first_name }} </td>
                                <td class="align-middle"> {{ $employee->last_name }} </td>
                                <td class="align-middle"> {{ $employee->company_id}} </td>
                                <td class="align-middle"> {{ $employee->email}} </td>
                                <td class="align-middle"> {{ $employee->phone}} </td>

                              </a>
                            </tr>
                            @endforeach
                        </tbody>

      </table>
      {{ $employees->links() }}

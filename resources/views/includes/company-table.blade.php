<table class="table table-striped w-100 table-bordered table-hover">
                        <thead class="text-center thead-dark">
                            <tr>
                                <th class="align-middle">Company ID</th>
                                <th class="align-middle">Company Name</th>
                                <th class="align-middle">Email</th>
                                <th class="align-middle">Website</th>
                                <th class="align-middle">Logo</th>
                            </tr>
                        </thead>

                        <tbody class=" text-center">
                            @foreach ($companies as $company)
                          <tr>
                                <td class="align-middle">{{ $company->id }} </td>
                                <td class="align-middle"> {{ $company->company_name }} </td>
                                <td class="align-middle"> {{ $company->email }}</td>
                                <td class="align-middle"> {{ $company->website }}</td>
                                <td class="align-middle"> <img src="/storage/images/{{ $company->logo }}"/></td>
                                 <td>
                                   <a href="/company-profile/{{$company->id}}">View</a>
                                 </td>
                            </tr>

                            @endforeach
                        </tbody>
    </table>
    {{ $companies->links() }}

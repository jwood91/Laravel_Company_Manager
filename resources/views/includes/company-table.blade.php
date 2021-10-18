<div id="outer">
  <div id="inner">

      <table class="table table-sm w-100 table-responsive-md table-bordered table-hover">
                              <thead class="text-center thead-light">
                                  <tr>
                                      <th class="align-middle main-column">Company ID</th>
                                      <th class="align-middle main-column">Company Name</th>
                                      <th class="align-middle main-column">Email</th>
                                      <th class="align-middle main-column">Website</th>
                                      <th id="logo" class="align-middle main-column">Logo</th>
                                      <th class="align-middle empty" style="width:100px;visibility: hidden;">Empty</th>
                                      <th id="links-header" class="align-middle links-header links-column">Links</th>

                                  </tr>
                              </thead>

                              <tbody class=" text-center">
                                  @foreach ($companies as $company)
                                <tr class="company-tr">
                                      <td class="align-middle main-column">{{ $company->id }} </td>
                                      <td class="align-middle main-column"> {{ $company->company_name }} </td>
                                      <td class="align-middle main-column"> {{ $company->email }}</td>
                                      <td class="align-middle main-column" style="max-width:250px"> {{ $company->website }}</td>
                                      <td class="align-middle main-column"> <img src="{{url('/storage/images/'.basename($company->logo))}}" style="width: 80px; height: 70px;"/></td>
                                      <td id="empty" class="align-middle empty" style="visibility: hidden;">Empty</td>
                                       <td class="align-middle company-links  links-data links-column">
                                         <div class="links-div">
                                              <a class="btn btn-primary table-link" title="View" href="{{ route('companies.show', $company->id) }}"><i class="far fa-eye tooltiptext"></i></a>
                                              <a class="btn btn-primary table-link"  title="Edit" href="{{ route('companies.edit', $company->id) }}"><i class="far fa-edit tooltiptext"></i></a>
                                          </div>
                                       </td>

                                  </tr>

                                  @endforeach
                              </tbody>
          </table>
        </div>
      </div>
          {{ $companies->links() }}

<div id="outer" class="">
  <div id="inner" class= "card">

      <table class="card-body p-0 m-0 table table-sm w-100 table-responsive-md table-bordered table-hover">
                              <thead class="text-center thead-dark">
                                  <tr>
                                      <th class="align-middle main-column ">@sortablelink('id', 'ID', ['parameter' => 'smile'], ['class' => 'sort-link'])</th>
                                      <th class="align-middle main-column">@sortablelink('company_name', 'Company Name', ['parameter' => 'smile'], ['class' => 'sort-link'])</th>
                                      <th class="align-middle main-column">@sortablelink('email', 'Email', ['parameter' => 'smile'], ['class' => 'sort-link'])</th>
                                      <th class="align-middle main-column">@sortablelink('website', 'Website', ['parameter' => 'smile'], ['class' => 'sort-link'])</th>
                                      <th id="logo" class="align-middle main-column">Logo</th>
                                      <th class="align-middle empty" style="width:100px; visibility: hidden;">Empty</th>
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
                                       <td id="table-links" class="align-middle company-links  links-data links-column p-0 m-0">
                                         <div class="links-div">
                                              <a class="btn btn-success table-link" {{Popper::arrow()->pop('View')}} href="{{ route('companies.show', $company->id) }}"><i class="far fa-eye tooltiptext"></i></a>
                                              <a class="btn btn-success table-link"  {{ Popper::arrow()->pop('Edit') }} href="{{ route('companies.edit', $company->id) }}"><i class="far fa-edit tooltiptext"></i></a>
                                          </div>
                                       </td>

                                  </tr>

                                  @endforeach
                              </tbody>
          </table>
        </div>
      </div>
          {!! $companies->appends(request()->except('page'))->render() !!}

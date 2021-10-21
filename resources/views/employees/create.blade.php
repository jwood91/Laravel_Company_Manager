<x-layout>
  <x-slot name="content">
    <div id="form-head" class="form-outer">

      <div id="form-head-inner" class="form-inner">
          <div class="form-title">
            <h2>Add New Employee</h2>
          </div>
      </div>



@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('message'))
    <div class="alert alert-success animate-fade">
        {{ session()->get('message') }}
    </div>
@endif
</div>
    <div id="form-container-outer" class="form-outer">
      <div id="edit-nav-link" class="edit-nav-link">
        <a class="btn btn-success btn-md" href="{{ route('employees.index') }}">Back</a>
      </div>
      <div id="form-container-inner" class="row justify-content-center card p-4">
        <form id="employee-form" action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="Enter Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Enter Name">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Company Email">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" name="phone" class="form-control" placeholder="Enter Phone Number">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="company_id">Company</label>
                        <select id='companies' name="company_id" class="form-control" form="employee-form">
                          <option value="">Select...</option>
                              @foreach ($companies as $company)
                                <option  value="{{ $company->id }}">{{$company->company_name}}</option>
                              @endforeach
                          </select>
                      </div>
                    </div>

                        <div class="form-button">
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </div>

            </div>
        </form>
      </div>
    </div>

  </x-slot>
</x-layout>

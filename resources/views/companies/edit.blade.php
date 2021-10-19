<x-layout>
  <x-slot name="content">
    <div id="form-head" class="form-outer">

      <div id="form-head-inner" class="form-inner">
          <div class="form-title">
            <h2>Edit Company</h2>
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
      <div id="form-container-outer" class="col">
        <div id="edit-nav-link" class="edit-nav-link">
          <a class="btn btn-success btn-md" href="{{ route('companies.index') }}">Back</a>
          <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                 @csrf
                 @method('DELETE')

                  <button type="submit" class="btn btn-danger btn-md" onclick="return confirm('Are you sure?')" href="{{route('companies.index')}}">Delete</button>

            </form>
        </div>
        <div id="form-container-inner" class="row justify-content-center card p-4">
            <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

             @method('PATCH')
             <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <label for="id">Company ID</label>
                       <input type="text" name="id" class="form-control" value="{{$company->id}}" readonly>
                   </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="company_name">Company Name</label>
                        <input type="text" name="company_name" class="form-control" value="{{$company->company_name}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" name="website" class="form-control" value="{{$company->website}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" value="{{$company->email}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="logo">Update Logo</label>
                        <input type="file" name="logo" class="logo">
                        <input type="hidden" name="old_logo" class="logo" value="{{$company->logo}}">
                        <img name="logo-image" src="{{url('/storage/images/'.basename($company->logo))}}" width="100px" height="100px" alt="logo-image">
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

<x-layout>
  <x-slot name="content">

      <h1>COMPANY INFORMATION</h1>

      <div id="company-container" class="show-container">
        <div id="show-buttons">
            <div class="pull-right">
                <a class="btn btn-success show-button" href="{{ route('companies.index', $company->id) }}">Back</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-success show-button" href="{{ route('companies.edit', $company->id) }}">Edit</a>
            </div>
          </div>
        <div id="company-inner" class="show-inner">

            <div id="company-id" class="company-details information-input">
                <label for="id" class="company-label">Company ID:</label>
                <p name="id" class="text-input">{{ $company->id }}</p>
            </div>
            <div id="company-name" class="company-details information-input">
              <label for="name" class="company-label">Company Name:</label>
              <p name="name" class="text-input">{{ $company->company_name }}</p>
            </div>
            <div id="company-email" class="company-details information-input">
              <label for="email" class="company-label">Email:</label>
              <a href="mailto:{{ $company->email }}" name="email" class="text-input">{{ $company->email }}</a>
            </div>
            <div id="company-website" class="company-details information-input">
              <label for="website" class="company-label">Website:</label>
              <a  name="website" class="text-input" href="{{ $company->website }}" target="_blank">View company website</a>
            </div>
            <div id="current-company-logo" class="logo-input company-details">
              <label for="logo" class="company-label">Logo:</label>
              <img name="logo" class="company-details" src="{{url('/storage/images/'.basename($company->logo))}}" style="height:100px; width: 100px;">
            </div>
        </div>
      </div>

    @include('includes.employee-table')




  </x-slot>
</x-layout>

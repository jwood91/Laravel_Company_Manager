<x-layout>
  <x-slot name="content">
    @if(session()->has('message'))
        <div class="alert alert-success animate-fade">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="col-xs-12 col-sm-12 col-md-12 mb-2 p-0 add-button-container">
            <a type="link" href="companies/create" class="btn btn-success">Add Company</a>
    </div>
      @include('includes.company-table')
  </x-slot>
</x-layout>

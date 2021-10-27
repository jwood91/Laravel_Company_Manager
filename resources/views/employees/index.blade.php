<x-layout>
  <x-slot name="content">
    @if(session()->has('message'))
        <div class="alert alert-success animate-fade">
            {{ session()->get('message') }}
        </div>
    @endif
    <div id="table-search-link">
        <div  class="mb-2 p-0 add-button-container top-inner">
            <a type="link" href="employees/create" class="btn btn-success">Add Employee</a>
          </div>
      @include('includes.search')
    </div>
    @include('includes.employee-table')
    
  </x-slot>
</x-layout>

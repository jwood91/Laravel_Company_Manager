<x-layout>
  <x-slot name="content">
    {{-- @if(session()->has('message'))
        <div class="alert alert-success animate-fade">
            {{ session()->get('message') }}
        </div>
    @endif --}}
    <div class="col-xs-12 col-sm-12 col-md-12 mb-2 p-0 add-button-container">
            <a type="link" href="employees/create" class="btn btn-success">Add Employee</a>
    </div>
      @include('includes.employee-table')
  </x-slot>
</x-layout>

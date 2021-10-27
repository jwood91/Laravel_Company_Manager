<x-layout>
  <x-slot name="content">
    @if(session()->has('message'))
        <div class="alert alert-success animate-fade">
            {{ session()->get('message') }}
        </div>
    @endif
    <div id="table-search-link">
    
        <div class="mb-2 p-0 add-button-container">
                <a type="link" href="companies/create" class="btn btn-success">Add Company</a>
        </div>
        @include('includes.search')
    </div>
    @include('includes.company-table')
  </x-slot>
</x-layout>

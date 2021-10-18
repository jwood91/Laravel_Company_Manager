<x-layout>
  <x-slot name="content">

      <h1>Employee Information</h1>

      <div id="company-container">
        <div id="company-inner">
            <div id="id" class="company-details information-input">
                <label for="id" class="company-label">Company ID:</label>
                <p name="id" class="text-input">{{ $employee->id }}</p>
            </div>
            <div id="first-name" class="company-details information-input">
              <label for="first_name" class="company-label">First Name</label>
              <p name="first_name" class="text-input">{{ $employee->first_name }}</p>
            </div>
            <div id="last-name" class="company-details information-input">
              <label for="last_name" class="company-label">Last Name</label>
              <p name="last_name" class="text-input">{{ $employee->last_name }}</p>
            </div>
            <div id="email" class="company-details information-input">
              <label for="email" class="company-label">Email</label>
              <a href="mailto:{{ $employee->email }}" name="email" class="text-input">{{ $employee->email }}</a>
            </div>
            <div id="phone" class="company-details information-input">
              <label for="phone" class="company-label">Phone</label>
              <a href="phone"  name="phone" class="text-input" href="{{ $employee->phone }}" target="_blank">{{ $employee->phone }}</a>
            </div>

        </div>

      </div>
      @include('includes.company-table');

</x-slot>
</x-layout>

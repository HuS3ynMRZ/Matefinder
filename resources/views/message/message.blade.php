@if( session()->has('success') )
    <p class="alert alert-success">{{ session()->get('success') }}</p>
@endif

@if( session()->has('error') )
    <p class="alert alert-danger">{{ session()->get('error') }}</p>
@endif

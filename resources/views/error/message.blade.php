@if(session()->has('success'))
    <p class="alert alert-success mb-3">
        {{ session()->get('success') }}
    </p>
@endif

@if(session()->has('error'))
    <p class="alert alert-danger mb-3">
        {{ session()->get('error') }}
    </p>
@endif

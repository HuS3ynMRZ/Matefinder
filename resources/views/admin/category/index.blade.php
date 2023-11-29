@extends('admin_layout.app')

@section('title')
    game
@endsection

@push('css')
    <style type="text/css">

    </style>
@endpush

@section('content')
    <div class="main-content d-none {{ config('app_logo.BLOCKCOLOR') }}">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18 {{ config('app_logo.BLOCKCOLOR') }}">Games</h4>

                            <a href="{{ route( 'admin.categories.create' ) }}" class="btn btn-info">
                                Add New Game
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        @include('error.message')

                        <div class="card {{ config('app_logo.BLOCKCOLOR') }} shadow-lg">
                            <div class="card-body">
                                <h4 class="card-title mb-4 {{ config('app_logo.TEXTCOLOR') }}">Games Listing</h4>

                                <div class="table-responsive">
                                    <table class="table table-nowrap mb-0 nowrap data_table">
                                        <thead>
                                            <tr>
                                                <th>SR.</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @if ( isset( $categories ) && count( $categories ) )
                                                @foreach ( $categories as $category )
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ isset( $category->name ) ? $category->name : "" }}</td>
                                                        <td><img style="width: 100px" class="img-thumbnail" src="{{ asset('public/'.$category->image) }}" /></td>
                                                        <td>{{ $category->created_at->diffForHumans() }}</td>
                                                        <td>
                                                            <a href="{{ route( 'admin.categories.edit', [ $category->id ] ) }}" class="btn btn-info btn-sm">
                                                                Edit
                                                            </a>

                                                            <form action="{{ route( 'admin.categories.destroy', [ $category ] ) }}" method="post" class="d-inline">
                                                                @csrf
                                                                @method( "DELETE" )

                                                                <button class="btn btn-danger btn-sm" onclick="return confirm( 'Are you sure you want to delete category ?' )">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer {{ config('app_logo.BLOCKCOLOR') }}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6" style="font-weight: bold">
                        <script>document.write(new Date().getFullYear())</script>
                        © Remo.
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection

@push('scripts')
    <script>

    </script>
@endpush

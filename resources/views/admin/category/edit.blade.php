@extends('admin_layout.app')

@section('title')
    Game
@endsection

@push('css')
    <style type="text/css">
        input {
            background-color: white !important;
        }
    </style>

    <link rel="stylesheet" href="{{ asset( 'public/css/select2/select2.min.css' ) }}">
    <link rel="stylesheet" href="{{ asset( 'public/css/select2/custom.css' ) }}">
@endpush

@section('content')
    <div class="main-content d-none {{ config('app_logo.BLOCKCOLOR') }}">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18 {{ config('app_logo.BLOCKCOLOR') }}">Game</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        @include('error.message')

                        <div class="card {{ config('app_logo.BLOCKCOLOR') }} shadow-lg">
                            <div class="card-body">
                                <h4 class="card-title mb-4 {{ config('app_logo.TEXTCOLOR') }}">Edit Game</h4>

                                <div class="container">
                                    <div class="col-6">
                                        <form action="{{ route( 'admin.categories.update', [ $category ] ) }}" method="POST" id="form" enctype="multipart/form-data">
                                            @csrf
                                            @method( "PATCH" )

                                            <div class="form-group">
                                                <label for="name">Name<span class="text-danger">*</span></label>

                                                <input type="text" class="form-control input_field @error( "name" ) is-invalid @enderror" name="name" id="name" placeholder="Name" value="{{ isset( $category->name ) ? $category->name : "" }}">

                                                @error( "name_1" )
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                                <span class="input_field_validation_error" id="name_validation_error"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea style="background-color: white" name="description" cols="3" placeholder="description" class="form-control">{{ isset( $category->description ) ? $category->description : "" }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="image">Game Image</label>
                                                <input type="file" class="form-control" name="image">
                                            </div>

                                            <div class="form-group text-right">
                                                <button class="btn btn-primary">
                                                    Update
                                                </button>
                                            </div>
                                        </form>
                                    </div>
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
    <script src="{{ asset( 'js/select2/select2.min.js' ) }}"></script>

    <script>
        $( document ).ready( function () {
            $( "#parent_category" ).select2();

            $( "#form" ).on( "submit", function () {
                let name = $( "#name" );
                let name_arabic = $( "#name_arabic" );
                let name_validation_error = $( "#name_validation_error" );
                let name_arabic_validation_error = $( "#name_arabic_validation_error" );

                let input_field = $( ".input_field" );
                let input_field_validation_error = $( ".input_field_validation_error" );

                input_field.removeClass( "invalid_input" );
                input_field_validation_error.text( "" );

                let error_found = false;

                if ( ! name.val() ) {
                    name.addClass( "invalid_input" );
                    name_validation_error.text( "The english name field is required." );
                    error_found = true;
                }

                if ( ! name_arabic.val() ) {
                    name_arabic.addClass( "invalid_input" );
                    name_arabic_validation_error.text( "The arabic name field is required." );
                    error_found = true;
                }

                if ( error_found ) {
                    return false;
                }
            } );
        } );
    </script>
@endpush

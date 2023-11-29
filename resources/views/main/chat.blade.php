@extends('main.layout.app')
@section('content')
    @push('css')
        <style>
            .chat
            {
                list-style: none;
                margin: 0;
                padding: 0;
            }

            .chat li
            {
                margin-bottom: 40px;
                padding-bottom: 5px;
                /* border-bottom: 1px dotted #B3A9A9; */
                margin-top: 10px;
                width: 80%;
            }


            .chat li .chat-body p
            {
                margin: 0;
                /* color: #777777; */
            }


            .chat-care
            {
                overflow-y: scroll;
                height: 350px;
            }
            .chat-care .chat-img
            {
                width: 50px;
                height: 50px;
            }
            .chat-care .img-circle
            {
                border-radius: 50%;
            }
            .chat-care .chat-img
            {
                display: inline-block;
            }
            .chat-care .chat-body
            {
                display: inline-block;
                max-width: 80%;
                background-color: #FFC195;
                border-radius: 12.5px;
                padding: 15px;
            }
            .chat-care .chat-body strong
            {
                color: #0169DA;
            }

            .chat-care .admin
            {
                text-align: right ;
                float: right;
            }
            .chat-care .admin p
            {
                text-align: left ;
            }
            .chat-care .agent
            {
                text-align: left ;
                float: left;
            }
            .chat-care .left
            {
                float: left;
            }
            .chat-care .right
            {
                float: right;
            }

            .clearfix {
                clear: both;
            }

            ::-webkit-scrollbar-track
            {
                box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                background-color: #F5F5F5;
            }

            ::-webkit-scrollbar
            {
                width: 12px;
                background-color: #F5F5F5;
            }

            ::-webkit-scrollbar-thumb
            {
                box-shadow: inset 0 0 6px rgba(0,0,0,.3);
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
                background-color: #555;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="{{ asset('public/js/star-rating-svg.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/js/demo.css') }}">
    @endpush
    <div class="container">
        <div class="row">
            <div class="text-center" id="rating_div">
                <div class="my-rating jq-stars"></div>
{{--                <div class="rating"></div>--}}
            </div>
            <div class="col-md-3">
                <h3>Players</h3>
                <ul class="list-group" style="margin-top: 1rem">
                    @foreach($users as $user)
                        <li style="cursor: pointer" data-id="{{ $user->id }}" class="list-group-item user_list">{{ isset( $user->first_name ) ? $user->first_name : "" }} {{ isset( $user->last_name ) ? $user->last_name : "" }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <span id="new_user">Chat Box</span>
                    </div>
                    <div class="card-body chat-care">
                        <ul class="chat" id="chat_container">

                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class="input-group">
                                <input id="btn-input" required type="text" class="form-control" placeholder="Type your message here..." />
                                <span class="input-group-btn">
                                <button class="btn btn-primary" id="btn-chat">Send</button>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    @push('js')
{{--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>--}}
{{--        <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>--}}
{{--<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>--}}
<script src="{{ asset('public/js/jquery.star-rating-svg.js') }}"></script>
        <script>
            var active_user_id = 0;

            function scrollToBottom(){
                $(".card-body").animate({ scrollTop: 500000 }, 400);
            }

            $(document).on('click','.user_list',function () {
                var user_id = $(this).attr('data-id');
                active_user_id = user_id;
                var user_name = $(this).text();
                $('#new_user').text(user_name);
                $('#chat_container').html("");
                $.ajax({
                    url: '{{ route('get-messages') }}',
                    type: "GET",
                    data: {
                        'to_id': active_user_id,
                        'game_id': {{ $id }},
                    },
                    success: function(data)
                    {
                        console.log( data );

                        $('#btn-input').val('');

                        if( data.html ){
                            $('#chat_container').html('');

                            $('#chat_container').html(data.html);

                            scrollToBottom();
                        }

                        console.clear();
                        console.log(data.rating);

                        if ( data.rating > 1 ){
                            $(".my-rating").remove();
                            $('#rating_div').html('<div class="my-rating jq-stars"></div>');
                            $(".my-rating").starRating({
                                initialRating: data.rating,
                                starSize: 25,
                                totalStars: 5,
                                callback:function(currentRating){
                                    console.log( currentRating );
                                    $.ajax({
                                        url: '{{ route('rating') }}',
                                        type: "GET",
                                        data: {
                                            'to_id': active_user_id,
                                            'game_id': {{ $id }},
                                            'rating': currentRating
                                        },
                                        success: function(data)
                                        {
                                            console.log( data );
                                        }
                                    });
                                }

                            });
                        }else {
                            $(".my-rating").remove();
                            $('#rating_div').html('<div class="my-rating jq-stars"></div>');
                            $(".my-rating").starRating({
                                initialRating: 0,
                                starSize: 25,
                                totalStars: 5,
                                callback:function(currentRating){
                                    console.log( "currentRating" , currentRating )
                                    $.ajax({
                                        url: '{{ route('rating') }}',
                                        type: "GET",
                                        data: {
                                            'to_id': active_user_id,
                                            'game_id': {{ $id }},
                                            'rating': currentRating
                                        },
                                        success: function(data)
                                        {
                                            console.log( data );
                                        }
                                    });
                                }
                            });
                        }
                    }
                });

            });

            setInterval(function(){
                $.ajax({
                    url: '{{ route('get-messages') }}',
                    type: "GET",
                    data: {
                        'to_id': active_user_id,
                        'game_id': {{ $id }},
                    },
                    success: function(data)
                    {
                        console.log( data );

                        // $('#btn-input').val('');

                        if( data.html ){
                            $('#chat_container').html('');

                            $('#chat_container').html(data.html);

                            scrollToBottom();
                        }
                    }
                });
            },8000);

            $('#btn-input').keypress(function (e) {
                if (e.which == 13) {
                    $('#btn-chat').trigger('click');
                    return false;
                }
            });

            $('#btn-chat').on('click', function(e){
                e.preventDefault();
                var message = $('#btn-input').val();

                $.ajax({
                    url: '{{ route('sendMsg') }}',
                    type: "POST",
                    data: {
                        {{--"_token": "{{ csrf_token() }}",--}}
                        'user_id': active_user_id,
                        'game_id': {{ $id }},
                        'message': message,
                    },
                    success: function(data)
                    {
                        console.log( data );

                        $('#btn-input').val('');

                        if( data.html ){
                            $('#chat_container').html('');

                            $('#chat_container').html(data.html);

                            scrollToBottom();
                        }
                    }
                });
            });
        </script>

        <script>
            // $(".my-rating").starRating({
            //     initialRating: 4.0,
            //     starSize: 25
            // });
        </script>
    @endpush
@endsection

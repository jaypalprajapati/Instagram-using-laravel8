@extends('layouts.navbar')
@php
    echo "<pre>";
    print_r($posts);
    echo "</pre>";
exit;
@endphp
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="styleshhet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('global.css')}}">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<meta name="meta_data" data-token="{{csrf_token()}}" data-user="{{auth()->check() ? auth()->id() : 0}}">
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
<style>
    .redHeart {
        color: red;
    }
</style>
<style>
    body {
        background-color: #eee
    }

    .time {
        font-size: 9px !important
    }

    .socials i {
        margin-right: 14px;
        font-size: 17px;
        color: #d2c8c8;
        cursor: pointer
    }

    .feed-image img {
        width: 100%;
        height: auto
    }

    .anyClasss {
        height: 150px;
        overflow-y: scroll;
    }

    body {
        background: #eee
    }

    .date {
        font-size: 11px
    }

    .comment-text {
        font-size: 12px
    }

    .fs-12 {
        font-size: 12px
    }

    .shadow-none {
        box-shadow: none
    }

    .name {
        color: #007bff
    }

    .cursor:hover {
        color: blue
    }

    .cursor {
        cursor: pointer
    }

    .textarea {
        resize: none
    }

    .comments {
        margin-top: 10px;
        font-weight: 400;
        color: #999;
    }

    .addComments {
        display: flex;
        align-items: center;
        margin-top: 20px;
        border-top: 1px solid #ddd;
        padding: 10px 0;
    }

    .addComments a {
        color: #1d92ffcb;
        font-weight: 500;
    }

    .addComments .reaction {
        position: relative;
        font-size: 1.3rem;
        margin-right: 10px;
        color: rgb(88, 88, 88);
    }

    input.text {
        width: 100%;
        border: none;
        outline: none;
        font-weight: 400;
        font-size: 14px;
        color: #262626;
        background: none;
    }

    input.text::placeholder {
        color: #777;
    }

    .comment-section {
        overflow-y: scroll;
        height: 250px;
    }

    .right-col {
        padding: 10px;

    }

    .profile-card {
        /* width: fit-content; */
        display: flex;
        justify-content: center;
        align-items: center;
        /* margin-bottom: 10px; */
    }

    .profile-card .profile-pic {
        flex: 0 0 auto;
        padding: 0;
        background: none;
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }

    .profile-card:first-child .profile-pic {
        width: 70px;
        height: 70px;
    }

    .profile-card .profile-pic img {
        border: none;
    }

    .profile-card .username {
        font-weight: 500;
        font-size: 14px;
        color: #000;
    }

    .sub-text {
        color: rgba(0, 0, 0, 0.5);
        font-size: 12px;
        font-weight: 500;
        margin-top: 5px;
    }

    .action-btn {
        opacity: 1;
        font-weight: 700;
        font-size: 12px;
        margin-left: 35px;
        background-color: blue;
        color: white;
    }

    .suggestion-text {
        font-size: 14px;
        color: rgba(0, 0, 0, 0.5);
        font-weight: 700;
        margin: 20px 0;
    }

    @media (max-width: 1100px) {

        .right-col,
        .search-box {
            display: none;
        }

        .nav-wrapper,
        .wrapper {
            width: 90%;
        }

        .wrapper {
            display: block;
        }
    }

    @media (max-width: 500px) {
        .nav-items .icon {
            margin: 0 5px;
        }

        .post-image {
            height: 300px;
        }
    }
</style>


@section('content')
<div class="container mt-4 mb-5">
    <div class="wrapper">
        <!-- left col element -->
        <p class="suggestion-text" style="position: fixed;">Suggestions for you</p><br><br>
        <div class="right-col " style="float:left;position: fixed; overflow-y: scroll;height: 80%;">

            @foreach($user as $value)
            <div class="profile-card">
                <div class="profile-pic">
                    <img class="rounded-circle" alt="dp" src="{{ asset('profile/' . $value->image)}}" width="45">
                </div>
                <div>
                    <p class="username">{{ $value->name }}</p>
                    <p class="sub-text">followed by user</p>
                </div>
                <form method="post" action="">
                    @csrf
                    <button type="submit" class="action-btn btn btn-primary btn-sm shadow-none">Follow</button>
                </form>
            </div>
            @endforeach

        </div>
    </div>
    <div class="d-flex justify-content-center row" style="height:50px !important; position:absolute !important;">
        <div class="col-md-5">
            <div class="feed p-2">
                <!-- <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white border" style="height:50px !important;">
                   
                    <div class="feed-icon px-2"><i class="fa fa-long-arrow-up text-black-50"></i></div>
                </div> -->
                @foreach($posts->all() as $data1)

                <div class="bg-white border mt-2 " style="z-index:-1 !important;">
                    <div>
                        <div class="d-flex flex-row justify-content-between align-items-center p-2 border-bottom">
                            <div class="d-flex flex-row align-items-center feed-text px-2"><img class="rounded-circle" alt="dp" src=" {{ asset('profile/' . $value->image)}}" width="45">

                                <div class="d-flex flex-column flex-wrap ml-2"><span class="font-weight-bold">{{$value->name}}</span><span class="text-black-50 time"> {{\Carbon\Carbon::parse($value->created_at)->diffForHumans()}}</span></div>
                            </div>
                            <div class="feed-icon px-2"><i class="fa fa-ellipsis-v text-black-50"></i></div>

                        </div>
                    </div>

                    <div class="feed-image p-2 px-3"><img class="img-fluid img-responsive" src=" {{ asset('image/' . $data1->image_post)}}" width="160" height="80" alt="No Image"></div>
                    <div class="bg-white">
                        <div class="d-flex flex-row fs-12">
                            <div class="like p-2 cursor pressLove">
                                <form method="POST" action="{{ route('/like') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input name="post_id" value="{{$data1->id}}" hidden>

                                    <button class="ml-1" type="submit" style="font-size: 15px; border:none;">

                                        @auth
                                        <i class="fal fa-heart pressLove {{$like->contains('user_id',auth()->id()) ? 'redHeart' : ''}} float-right">{{$like->count()}}</i>
                                        @else
                                        <i class="fal fa-heart pressLove float-right">{{$like->count()}}</i>
                                        @endauth
                                    </button>
                            </div>
                            </form>
                            <div class="like p-2 cursor">
                                <span class="ml-1"><a href="#addComments">Comment </a></span>
                            </div>
                            <!-- <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div> -->
                        </div>
                    </div>

                    <div class="d-flex  row">
                        <div class="col-md-12">
                            <div class="d-flex flex-column comment-section">

                                @foreach($comments->all() as $comment)

                                <div class="bg-white p-2 ">
                                    <div class="d-flex flex-row user-info">
                                        <div class="d-flex flex-column justify-content-start ml-2">
                                            <span class="d-block font-weight-bold name">{{$comment->name}}</span>
                                            <span class="text-black-50 time"> {{\Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</span>
                                            <span class="comment-text">{{$comment->body_cmt}}</span>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                                <div class="bg-light p-2">
                                    <form method="post" action="{{ route('post.store_comment') }}">
                                        @csrf
                                        <div class="d-flex flex-row align-items-start addComments" id="addComments">
                                            <textarea class="form-control ml-1 shadow-none textarea" placeholder="Add a comment..." name="body_cmt" required></textarea>
                                            <input name="post_id" value="{{$data1->id}}" hidden>
                                            <input name="user_id" value="{{ Auth::user()->id }}" hidden>
                                        </div>
                                        <div class="mt-2 text-right">
                                            <button class="btn btn-primary btn-sm shadow-none" type="submit"><i class="far fa-smile"></i> Comment</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>

        </div>



    </div>
</div>
</div>
@endsection
<script>
    $('.pressLove').click(function() {
        var elem = $(this).parents('.card');
        var data = {};
        data.post_id = elem.data('post');
        $.ajax({
            url: 'like',
            data,
            success: function(data) {
                elem.find('.pressLove').text(data.likes);
                if (elem.find('.pressLove').hasClass('redHeart')) {
                    elem.find('.pressLove').removeClass('redHeart');
                } else {
                    elem.find('.pressLove').addClass('redHeart');
                }
            }
        });
    });
</script>





<div class="container mt-4 mb-5">
    <div class="wrapper">
        <!-- left col element -->
        <p class="suggestion-text" style="position: fixed;">Suggestions for you</p><br><br>
        <div class="right-col " style="float:left;position: fixed; overflow-y: scroll;height: 80%;">
        @foreach($posts as $post)
          {{$post->all()}}
          {{$post->user->all()}}

                @foreach($post->comment as $commen)
                     {{$commen->all()}}
   
                @endforeach    
                @foreach($post->like as $li)
                     {{$li->all()}}
   
                @endforeach    
        @endforeach

    
        </div>
    </div><br><br>
    @php
    echo "<pre>";
    print_r($posts);
    echo "</pre>";

@endphp
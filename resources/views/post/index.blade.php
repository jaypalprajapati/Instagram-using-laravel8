@extends('layouts.navbar')


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
        background-color: #eee;
        
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
    ::-webkit-scrollbar {
  display: none;
}
</style>


@section('content')

<div class="container mt-4 mb-5" >

    <div class="wrapper" >
        <!-- left col element -->
        <p id="Suggestions"class="suggestion-text" style="position: fixed;">Suggestions for you</p><br><br>

        <div class="right-col " style="float:left;position: fixed; overflow-y: scroll;height: 80%;">
            @foreach($user as $usr)
            <br>
            <div class="profile-card">
                <div class="profile-pic">
                    <img class="rounded-circle" alt="dp" src="{{ asset('profile/' . $usr->image)}}" width="45">
                </div>
                <div>
                    <p class="username"> {{$usr->name}}</p>
                    <p class="sub-text">followed by user</p>
                </div>
                <form method="post" action="">
                    @csrf
                    <a href="{{url('/')}}/addFriend/{{$usr->id}}" type="submit" class="action-btn btn btn-primary btn-sm shadow-none">Follow</a>
                </form>
            </div>
            @endforeach
        </div>

        <div id="friends"  style="float:right;">
        <div  style="overflow-y: scroll;height: auto;">
        <p id="Suggestions"class="suggestion-text" >You Following</p>
       
            @foreach($friend_req as $fnfollow)
            <br>
            <div class="profile-card">
                <div class="profile-pic">
                    <img class="rounded-circle" alt="dp" src="{{ asset('profile/' . $fnfollow->image)}}" width="45">
                </div>
                <div>
                    <p class="username"> {{$fnfollow->name}}</p>
                    <p class="sub-text">following by You</p>
                </div>
                <form method="post" action="{{ route('friends.dltfrd',$fnfollow->fid) }}">
                @csrf
												
                    <button type="submit" class="action-btn btn btn-info btn-sm shadow-none delete">Unfollow</button>
                </form>
            </div>
            @endforeach
        </div>
            <div style="overflow-y: scroll;height:auto;">
            <p id="Suggestions"class="suggestion-text" >Your Followers</p>
            @foreach($friend_accept as $fnfollowing)
            <br>
            <div class="profile-card">
                <div class="profile-pic">
                    <img class="rounded-circle" alt="dp" src="{{ asset('profile/' . $fnfollowing->image)}}" width="45">
                </div>
                <div>
                    <p class="username"> {{$fnfollowing->name}}</p>
                    <p class="sub-text">following by You</p>
                </div>
                <!-- <form method="post" action="{{ route('friends.dltfrd',$fnfollowing->fid) }}">
                @csrf
												
                    <button type="submit" class="action-btn btn btn-info btn-sm shadow-none delete">Unfollow</button>
                </form> -->
            </div>
            @endforeach
            </div>
        </div>
    </div>
    
    <div class="d-flex justify-content-center row" style="height:50px !important; position:absolute !important; ">
    
        <div class="col-md-5" style="padding-left: 120px;margin-right: 350px;">
            <div class="feed p-2">
                @foreach($posts as $post)
                <div class="bg-white border mt-2 " style="z-index:-1 !important; ">
                    <div>
                        <div class="d-flex flex-row justify-content-between align-items-center p-2 border-bottom">
                            <div class="d-flex flex-row align-items-center feed-text px-2"><img class="rounded-circle" alt="dp" src="{{ asset('profile/' .$post->user->image)}} " width="45">
                                <div class="d-flex flex-column flex-wrap ml-2">
                                    <span class="font-weight-bold">{{$post->user->name}}</span>
                                    <span class="text-black-50 time"> {{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</span>
                                </div>
                            </div>
                            <!-- <div class="feed-icon px-2"><i class="fa fa-ellipsis-v text-black-50"></i></div> -->
                        </div>
                    </div>
                    <div class="feed-image p-2 px-3">{{$post->body}}
                        <img class="img-fluid img-responsive" src="{{ asset('image/' . $post->image_post)}} " width="160" height="80" alt="No Image">
                    </div>
                    <div class="bg-white">
                        <div class="d-flex flex-row fs-12">
                            <div class="like p-2 cursor pressLove">

                                <form method="POST" action="{{ route('/like') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input name="post_id" value="{{$post->id}}" hidden>
                                    <button class="ml-1" type="submit" style="font-size: 20px; border:none;">
                                        @auth
                                        <i class="fal fa-heart pressLove {{$post->like->contains('user_id',auth()->id()) ? 'redHeart' : ''}} float-right">{{$post->like->count()}}</i>
                                        @else
                                        <i class="fal fa-heart pressLove float-right">{{$post->like->count()}}</i> 
                                        <!-- {{$post->count()}} -->
                                        @endauth
                                    </button>
                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="d-flex  row">
                        <div class="col-md-12">
                            <div class="d-flex flex-column comment-section">
                                @foreach($post->comment as $commen)
                                <div class="bg-white p-2 ">
                                    <div class="d-flex flex-row user-info">
                                        <div class="d-flex flex-column justify-content-start ml-2">
                                            <!-- <img class="rounded-circle" alt="dp" src="{{ asset('profile/' . $commen->user->image)}}" width="45"> -->
                                            <span class="d-block font-weight-bold name"> {{$commen->user->name}}</span>
                                            <span class="text-black-50 time"> {{\Carbon\Carbon::parse($commen->created_at)->diffForHumans()}}</span>
                                            <span class="comment-text"> {{$commen->body_cmt}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="bg-light p-2">
                                    <form method="post" action="{{ route('post.store_comment') }}">
                                        @csrf
                                        <div class="d-flex flex-row align-items-start addComments" id="addComments">
                                            <textarea class="form-control ml-1 shadow-none textarea" placeholder="Add a comment..." name="body_cmt" required></textarea>
                                            <input name="post_id" value="{{$post->id}}" hidden>
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
                if (elem.find('.pressLove').hasClass('redHeart',)) {
                    elem.find('.pressLove').removeClass('redHeart');
                } else {
                    elem.find('.pressLove').addClass('redHeart');
                }
            }
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('.delete').click(function(e) {

            if (!confirm('Are you sure you want to Unfollow this Friend?')) {

                e.preventDefault();

            }

        });

    });
</script>

</body>
</html>
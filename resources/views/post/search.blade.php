@extends('layouts.navbar')


@section('content')
<div class="container mt-4 mb-5">
<div class="wrapper" >
            @foreach($searchname as $usr)
            <br>
            <div class="profile-card row">
                <div class="profile-pic">
                    <img class="rounded-circle" alt="dp" src="{{ asset('profile/' . $usr->image)}}" width="145" height="145">
            
                    <span class="username" style="padding-left:150px;"> {{$usr->name}}</span>
                    <!-- <span class="sub-text">followed by user</span> -->
             
                <form method="post" action="" style="float:right;">
                    @csrf
                  <span>  <a href="{{url('/')}}/addFriend/{{$usr->id}}" type="submit" class="action-btn btn btn-primary btn-sm shadow-none">Follow</a> </span>
                </form>
                <hr>
                </div>
            </div>
            @endforeach
</div>
        </div>
@endsection
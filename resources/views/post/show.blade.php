@extends('layouts.navbar')


@section('content')
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: center;
            padding: 16px;
        }

        th:first-child,
        td:first-child {
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        .fa-check {
            color: green;
        }

        .fa-remove {
            color: red;
        }
    </style>
</head>

<body>

    <center>
        <h2>Post status</h2>
    </center>

    <table>
        <tr>
            <th>User Profile</th>
            <th>User Name</th>
            <th>User Post</th>
            <th>User Post Body</th>
            <th>Action</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td><img class="rounded-circle" alt="dp" src="{{ asset('profile/' .$post->user->image)}}" width="90" height="90"></td>
            <td>{{$post->user->name}}</td>
            <td><img alt="dp" src="{{ asset('image/' . $post->image_post)}}" width="100" height="100"></td>
            <td> {{$post->body}} </td>
            <td>
                <form action="{{ route('post.reject',$post->id) }}" method="get">
                    @csrf
                    <button type="submit" class="delete"><i class="fa fa-remove"> </i></button>
                </form>
            </td>
            <td>
                <form method="get" action="{{route('post.accept',$post->id) }}"> @csrf
                    <button type="submit"><i class="fa fa-check"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <hr>
    <hr>

    <center>
        <h2>Post Rejected</h2>
    </center>

    <table>
        <tr>
            <th>User Profile</th>
            <th>User Name</th>
            <th>User Post</th>
            <th>User Post Body</th>
            <th>Action</th>
        </tr>
        @foreach($rejected as $reject)
        <tr>
            <td><img class="rounded-circle" alt="dp" src="{{ asset('profile/' .$reject->user->image)}}" width="90" height="90"></td>
            <td>{{$reject->user->name}}</td>
            <td><img alt="dp" src="{{ asset('image/' . $reject->image_post)}}" width="100" height="100"></td>
            <td> {{$reject->body}} </td>
            <td>
                <form action="{{ route('post.reject',$reject->id) }}" method="get">
                    @csrf
                    <button type="submit" class="delete"><i class="fa fa-remove"> </i></button>
                </form>
            </td>
            <td>
                <form method="get" action="{{route('post.accept',$reject->id) }}"> @csrf
                    <button type="submit"><i class="fa fa-check"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>

</html>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.delete').click(function(e) {
            if (!confirm('Are you sure you want to delete this Friend?')) {
                e.preventDefault();
            }
        });
    });
</script>
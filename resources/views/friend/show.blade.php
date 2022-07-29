<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f1f1f1;
            padding: 20px;
            font-family: Arial;
        }

        /* Center website */
        .main {
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            font-size: 50px;
            word-break: break-all;
        }

        .row {
            margin: 8px -16px;
        }

        /* Add padding BETWEEN each column */
        .row,
        .row>.column {
            padding: 8px;
        }

        /* Create four equal columns that floats next to each other */
        .column {
            float: left;
            width: 25%;
        }

        /* Clear floats after rows */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Content */
        .content {
            background-color: white;
            padding: 10px;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 900px) {
            .column {
                width: 50%;
            }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- MAIN (Center website) -->
    <div class="main">
        <center>
            <h2>Friend Requests</h2>
        </center>
        <div class="pull-left">
            <a class="btn btn-primary" href="{{ route('post.index') }}"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
        </div>
        <!-- Portfolio Gallery Grid -->
        <div class="row">
            @foreach($friend_req as $friend)
            <div class="column">
                <div class="content">
                    <img src="{{ asset('profile/' . $friend->image)}}" alt="Mountains" style="width:100%">
                    <span style="font-size:23px;"> {{$friend->name}}</span>
                    <p style=" font-size: 11px !important;float:right;"> {{\Carbon\Carbon::parse($friend->ftime)->diffForHumans()}}</p>
                    <p>
                    <div class="w3-section">
                        <form method="get" action="{{route('friend.accept',$friend->fid) }}">
                            <button type="submit" class="w3-button w3-green btn btn-info">Accept</button>
                        </form>
                        <form action="{{ route('friends.dltfrd',$friend->fid) }}" method="POST">
                            @csrf
                            <button type="submit" class="w3-button w3-red btn btn-danger delete">Decline</button>
                        </form>
                    </div>
                    </p>
                </div>
            </div>
            @endforeach
            <!-- END GRID -->
        </div>
        <!-- END MAIN -->
    </div>
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
</body>

</html>
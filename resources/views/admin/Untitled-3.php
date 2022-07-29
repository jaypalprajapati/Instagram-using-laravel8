<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="styleshhet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="input-group">
    <div id="search-autocomplete" class="form-outline">
    <form action="{{ route('search')}}" method="get" onsubmit="openModal()" id="myForm">
@csrf
<input type="search" name="search" id="form1" class="form-control" />
      <button type="submit" class="w3-button w3-red btn btn-danger delete" >Submit</button>
      </form>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
        <div class="well" style="background-color:blue; color:white; ">
                        @foreach($searchname as $searchname)
                        <img src="profile/{{$searchname->image}}" width="10epx" height="10epx">
                        <h4> Firstname : {{$searchname->name}}</h4>

                        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
                        @endforeach
                    </div>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>$('#myForm').on('submit', function(e){
  $('#myModal').modal('show');
  e.preventDefault();
});
</script>


<div class="input-group">
    <div id="search-autocomplete" class="form-outline">
    <form action="{{ route('search')}}" method="get">

@csrf
<input type="search" name="search" id="form1" class="form-control" />
      <button type="submit" class="w3-button w3-red btn btn-danger delete" >Decline</button>

      </form>
       
        <label class="form-label" for="form1">Search</label>
    </div>
    <button type="button" class="btn btn-primary">
        <i class="fas fa-search"></i>
    </button>
</div>

<div class="container"> 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="well" style="background-color:blue; color:white; ">
                        @foreach($searchname as $searchname)
                        <img src="profile/{{$searchname->image}}" width="10epx" height="10epx">
                        <h4> Firstname : {{$searchname->name}}</h4>
                        <a href="{{url('addfriend/' .$searchname->id.'/')}} "><span class="btn btn-primary">Add Friend</span></a>
                        <a href="{{url('deletfriend' .$searchname->id.'/')}}"><span class="btn btn-danger">Delete Friend</:pan></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
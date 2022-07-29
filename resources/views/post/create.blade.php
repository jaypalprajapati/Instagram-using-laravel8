@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <h4> <div class="card-header">{{ __('Post_Create') }}</div> </h4>
                <div class="card-body">
                    <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type=" " name="user_id" value="{{Auth::user()->id}}" hidden>
                        <div class="row mb-3">
                            <label for="body" class=" col-form-label">{{ __('something write Here') }}</label>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="body" autocomplete="off">
                              
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Post Image</strong>:</strong>
                                <input type="file" name="image_post" class="form-control" >
                            </div>
                            @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <br>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a type="button" class="btn btn-info" href="{{ route('post.index') }}"> Back</a>
                                <button type="submit" class="btn btn-primary">
                                    submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
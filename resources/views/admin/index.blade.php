@extends('layouts.navbar')
@section('content')
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Hobbies</th>

    </tr>
    @foreach($data as $key => $value)
    <!-- <tr  id-="uid{{$value->id}}"> -->
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->gender }}</td>
        <td><img src=" {{ asset('profile/' . $value->image)}}" width="160" height="80"></td>
        <td>
            @if(request()->has('trashed'))
            <form action="{{ route('user.destroy',$value->id) }}" method="POST">
                <a href="{{ route('user.restore', $value->id) }}" class="btn btn-success">Restore</a>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete">Delete</button>
            </form>
            @else
            <form action="{{ route('user.destroy',$value->id) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('user.edit',$value->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete">Delete</button>
            </form>
            @endif
        </td>
    </tr>
    @endforeach
</table>

{!! $data->links() !!}
<div class="float-end" style="text-align:right;">
    @if(request()->has('trashed'))
    <a href="{{ route('user.index') }}" class="btn btn-info">View All products</a>
    <a href="{{ route('user.restoreAll') }}" class="btn btn-success">Restore All</a>
    @else
    <a href="{{ route('user.index', ['trashed' => 'product']) }}" class="btn btn-primary">View Deleted user</a>
    @endif
</div>
@endsection
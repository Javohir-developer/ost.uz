@section('title', 'Dashboard1')
@extends('adminlte::page')
@section('content')
        <div class="row">
            <div class="col-sm-10"></div>
            <div class="col-sm-2">
                <a class="btn btn-success" style="width: 100%" href="{{ route('vdiyo.create') }}">Create</a>
            </div>
        </div>
        <br>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>About</th>
                <th width="280px">Images</th>
                <th width="280px"></th>
            </tr>
            @foreach ($vdiyo as $vdiyos)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $vdiyos->title }}</td>
                    <td>{{ $vdiyos->about }}</td>
                    <td><video width="147px" height="66px" controls  style="border-radius: 10px;">
                            <source src="{{url('/images/'.$vdiyos->image)}}" type="video/mp4">
                            <source src="{{url('/images/'.$vdiyos->image)}}" type="video/ogg">
                        </video>
                    </td>
                    <td>
                        <form action="{{ route('vdiyo.destroy',['id'=> $vdiyos->id]) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('vdiyo.show',$vdiyos->id) }}">Show</a>
                            <a class="btn btn-success" href="{{ route('vdiyo.edit',$vdiyos->id) }}">Edit</a>
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <p style="text-align: center;">{!! $vdiyo->links() !!}</p>
@endsection

@section('title', 'Dashboard1')
@extends('adminlte::page')
@section('content')
        <div class="row">
            <div class="col-sm-10"></div>
            <div class="col-sm-2">
                <a class="btn btn-success" style="width: 100%" href="{{ route('products.create') }}"> Create</a>
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
            @foreach ($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->about }}</td>
                    <td><img src="{{url('/images/'.$product->image)}}" alt="Image" style="height: 66px;width: 147px;border-radius: 10px;"/></td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                            <a class="btn btn-success" href="{{ route('products.edit',$product->id) }}">Edit</a>
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <p style="text-align: center;">{!! $products->links() !!}</p>
@endsection

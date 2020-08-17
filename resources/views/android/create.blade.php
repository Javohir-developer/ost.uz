@section('title', 'Dashboard1')
@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="text-align: center">Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('android.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('android.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('POST')
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="title" class="form-control" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>About:</strong>
                            <input type="text" class="form-control" name="about" placeholder="about" required>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputFile">Rasmi (jpeg , jpg , png)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile"  name="image" required>
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button style="width: 100%; margin-top: 20px" type="submit" class="btn btn-primary">saqlash</button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>link:</strong>
                            <input type="text" name="link" class="form-control" placeholder="Name" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6"></div>

        </div>
        </div>

    </form>
@endsection

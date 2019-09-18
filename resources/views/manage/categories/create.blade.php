@extends('layouts.manage')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between m-tb">
            <div>
                <h2>Create Category</h2>
            </div>

            <div>
                <a href="{{ route('categories.index') }}" class="btn btn-success">Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger mt-3">
            <strong>Whoops!</strong> There were some problems with your input. <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card card-body mt-3">
        {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control', 'id' => 'name']) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        {!! Form::text('description', null, ['class' => 'form-control', 'id' => 'description','placeholder' => 'Description']) !!}
                    </div>
                </div>

                

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection

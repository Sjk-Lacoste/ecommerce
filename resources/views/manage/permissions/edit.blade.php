@extends('layouts.manage')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between m-tb">
            <div>
                <h2>Edit {{ $permission->name }}</h2>
            </div>

            @can('role-create')
                <div>
                    <a href="{{ route('permissions.index') }}" class="btn btn-success">Back</a>
                </div>
            @endcan
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
        {!! Form::model($permission, ['method' => 'PATCH', 'route' => ['permissions.update', $permission->id]]) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name: </strong>
                        {!! Form::text('name', (isset($permission)) ? $permission->name : old('name', ''), ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection

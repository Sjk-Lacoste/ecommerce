@extends('layouts.manage')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between m-tb">
            <div>
                <h2>Edit Role</h2>
            </div>

            <div>
                <a href="{{ route('roles.index') }}" class="btn btn-success">Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger mt-3">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card card-body mt-3">
        {!! Form::model($role, ['method' => 'PATCH', 'route' => ['roles.update', $role->id]]) !!}
            <div class="form-group">
                <label for="name">
                    <strong>Name</strong>
                </label>
                <input type="text" name="name" class="form-control" placeholder="Role Name.." value="{{ $role->name }}">
            </div>

            <div class="form-group">
                <label for="permission">
                    <strong>Permissions</strong>
                </label>
                <br>
                <div class="form-check">
                    @foreach ($permission as $item)
                        <label class="mr-3">
                            {{ Form::checkbox('permission[]', $item->id, collect($rolePermissions)->where('id', $item->id)->first() ? true : false, ['class' => 'name', 'id' => 'permission']) }} {{ $item->name }}
                        </label>
                    @endforeach
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        {!! Form::close() !!}
    </div>
@endsection

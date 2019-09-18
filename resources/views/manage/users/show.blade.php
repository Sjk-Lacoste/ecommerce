@extends('layouts.manage')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between m-tb">
            <div>
                <h2>{{ $user->name }} Profile</h2>
            </div>

            <div>
                <a href="{{ route('users.index') }}" class="btn btn-success">Back</a>
            </div>
        </div>
    </div>

    <div class="card card-body mt-3">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $user->name }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $user->email }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Roles:</strong>
                    @if (!empty($user->getRoleNames()))
                        @foreach ($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Permissions:</strong>
                    @if (!empty($user->getPermissionsViaRoles()))
                        @foreach ($user->getPermissionsViaRoles()->pluck('name') as $p)
                            <label class="badge badge-success">{{ $p }}</label>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

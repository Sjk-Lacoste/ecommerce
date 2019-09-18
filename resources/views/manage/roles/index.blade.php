@extends('layouts.manage')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between m-tb">
            <div>
                <h2>Roles Management</h2>
            </div>

            {{-- @can('role-create')

            @endcan --}}
            <div>
                <a href="{{ route('roles.create') }}" class="btn btn-success">Create New Role</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card card-body mt-3">
        <table class="table table-hovered mb-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a href="{{ route('roles.show', $role->id) }}" class="btn btn-info btn-sm">Show</a>
                            {{-- @can('role-edit')

                            @endcan --}}
                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm">Edit</a>

                            {{-- @can('role-delete')

                            @endcan --}}
                            {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {!! $roles->render() !!}
    </div>
@endsection

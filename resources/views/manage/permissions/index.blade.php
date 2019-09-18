@extends('layouts.manage')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between m-tb">
            <div>
                <h2>Permissions Management</h2>
            </div>

            {{-- @can('role-create')

            @endcan --}}
            <div>
                <a href="{{ route('permissions.create') }}" class="btn btn-success">Create New Permission</a>
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
                @foreach ($permissions as $key => $permission)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>
                            <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-info btn-sm">Show</a>
                            {{-- @can('role-edit')

                            @endcan --}}
                            <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-primary btn-sm">Edit</a>

                            {{-- @can('role-delete')

                            @endcan --}}
                            {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id], 'style' => 'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {!! $permissions->render() !!}
    </div>
@endsection

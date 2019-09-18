<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            General
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{ route('manage.dashboard') }}" class="nav-link">Dashboard</a>
            </li>
        </ul>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Products Management
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{ route('products.index') }}" class="nav-link">Products</a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('categories.index') }}" class="nav-link">Categories</a>
            </li>
        </ul>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Administration
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{ route('users.index') }}" class="nav-link">Manage Users</a>
            </li>

            <li class="list-group-item">
                <a href="{{ route('roles.index') }}" class="nav-link">Manage Roles</a>
            </li>

            <li class="list-group-item">
                <a href="{{ route('permissions.index') }}" class="nav-link">Manage Permissions</a>
            </li>
        </ul>
    </div>
</div>


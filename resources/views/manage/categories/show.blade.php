@extends('layouts.manage')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between m-tb">
            <div>
                <h2>{{ $category->name }}</h2>
            </div>

            <div>
                <a href="{{ route('categories.index') }}" class="btn btn-success">Back</a>
            </div>
        </div>
    </div>

    <div class="card card-body mt-3">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong><br>
                    {{ $category->name }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong><br>
                    {!! $category->description !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>URL:</strong><br>
                    <a href="{{ route('categories.show', $category->id)}} " class="link card-link">
                        {{ route('categories.show', $category->slug) }}
                    </a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong><br>
                    @if ($category->status == 1)
                        <p class="lead">
                            <label class="badge badge-success">
                                Active
                            </label>
                        </p>
                    @else
                        <p class="lead">
                            <label class="badge badge-danger">
                                Inactive
                            </label>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

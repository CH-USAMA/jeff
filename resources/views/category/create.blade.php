@extends('layouts.app')

@section('content')
<div class="container">

@if(\Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ \Session::get('success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Category</div>
                <form action="{{ route('category.store') }}" method="post">
                    <div class="card-body">
                        @csrf
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" />
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

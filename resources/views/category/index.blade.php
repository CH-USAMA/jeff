@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Displaying Notification -->
@if(\Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ \Session::get('success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif

    <div class="row justify-content-center">
    @foreach($categories as $category)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>{{ $category->title }}</h3></div>
            <div class="card-text">
                Created By: <b>{{ $category->user->name }}</b><br/>
                Created At: {{ $category->created_at->diffForHumans() }}
            </div>
        </div>
    </div>
    @endforeach
    @foreach($passports as $passport)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <!-- <div class="card-title"><h3>{{ $passport->user->name }}</h3></div> -->
            <div class="card-title"><h3>{{ $passport->user->name }}</h3></div>

            <div class="card-text">
                Passport Number: <b>{{ $passport->passport_number }}</b><br/>
                Created At: {{ $passport->created_at->diffForHumans() }}
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
@endsection

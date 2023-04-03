@extends('layout.admin')

@section('judul')
    Home Page
@endsection

@section('isi')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Welcome {{ $user->name }}</h3>
    </div>
  </div>
@endsection

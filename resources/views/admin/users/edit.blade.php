@extends('template_backend.home')
@section('sub-judul','Edit Users')
@section('content')

@if (count($errors)>0)
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{ $error }}
      </div>
    @endforeach    
@endif

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
  </div>
@endif

<form action="{{ route('users.update', $users->id)}}" method="POST">
@csrf
@method('put')
<div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="name" value="{{ $users->name }}">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" value="{{ $users->email }}" readonly>
</div>
<div class="form-group">
    <label>Email</label>
    <select name="tipe" class="form-control">
        <option value="" holder>Pilih Tipe Users</option>
        <option value="1" @if ($users->tipe == 1)
            selected
        @endif>Administrator</option>
        <option value="0" @if ($users->tipe == 0)
            selected
        @endif>Penulis</option>
    </select>
</div>
<div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" name="password">
</div>

<div class="form-group">
    <button class="btn btn-primary btn-block">Update Users</button>
  </div>

</form>
@endsection
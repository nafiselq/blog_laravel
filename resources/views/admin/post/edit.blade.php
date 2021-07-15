@extends('template_backend.home')
@section('sub-judul','Edit Posts')
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

<form action="{{ route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
@csrf
@method('patch')
<div class="form-group">
    <label>Judul Posts</label>
    <input type="text" class="form-control" name="judul" value="{{$post->judul}}">
</div>
<div class="form-group">
    <label>Kategori Posts</label>
    <select name="category_id" class="form-control">
        <option value="" holder>Pilih Kategori</option>
        @foreach ($category as $kategori)
            <option value="{{ $kategori->id }}" @if ($kategori->id == $post->category_id)
                selected
            @endif> {{ $kategori->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Pilih Tags</label>
    <select class="form-control select2" multiple="" name="tags[]">
        @foreach ($tags as $tag)
        <option value="{{ $tag -> id}}" @foreach ($post->tags as $value)
            @if ($tag->id == $value->id)
                selected
            @endif
        @endforeach>{{ $tag-> name }}</option>
        @endforeach
    </select>
  </div>
<div class="form-group">
    <label>Isi Konten Posts</label>
    <textarea type="text" class="form-control" name="content">{{ $post->content }}</textarea>
</div>
<div class="form-group">
    <label>Gambar Posts</label>
    <input type="file" class="form-control" name="gambar">
</div>


<div class="form-group">
    <button class="btn btn-primary btn-block">Update Posts</button>
  </div>

</form>
@endsection
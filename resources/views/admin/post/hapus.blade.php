@extends('template_backend.home')
@section('sub-judul','Posts yang sudah diHapus')
@section('content')


    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
    @endif
    
        <table class="table table-striped table-hover table-sm table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Posts</th>
                    <th>Kategori Posts</th>
                    <th>Tags Posts</th>
                    <th>Konten Posts</th>
                    <th>Gambar Posts</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $result => $hasil)
                <tr>
                    <td>{{ $result + $post->firstitem() }}</td>
                    <td>{{$hasil->judul}}</td>
                    <td>@foreach ($hasil->tags as $tag)
                        <ul><li>{{ $tag-> name }}</li></ul>
                    @endforeach</td>
                    <td>{{$hasil->category->name}}</td>
                    <td>{{$hasil->content}}</td>
                    <td><img src="{{ asset($hasil-> gambar) }}" alt="gambar" class="img-fluid" style="width: 100px"></td>
                    <td>
                        <form action="{{ route('posts.kill', $hasil->id )}}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('posts.restore', $hasil->id) }}" class="btn btn-info btn-sm">Restore</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $post-> links() }}
@endsection
@extends('template_backend.home')
@section('sub-judul','Posts')
@section('content')


    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
    @endif
    <a href="{{ route('posts.create')}}" class="btn btn-info btn-sm">Tambah Posts</a>
    <br>

        <table class="table table-striped table-hover table-sm table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Posts</th>
                    <th>Kategori Posts</th>
                    <th>Tags Posts</th>
                    <th>Creator</th>
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
                        <ul>
                            <h6><span class="badge badge-info">{{ $tag-> name }}</span></h6>
                        </ul>
                    @endforeach</td>
                    <td>{{$hasil->category->name}}</td>
                    <td>{{$hasil->users->name}}</td>
                    <td><img src="{{ asset($hasil-> gambar) }}" alt="gambar" class="img-fluid" style="width: 100px"></td>
                    <td>
                        <form action="{{ route('posts.destroy', $hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('posts.edit', $hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $post-> links() }}
@endsection
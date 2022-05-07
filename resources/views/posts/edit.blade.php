@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Articulo</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('posts.update', $post ) }}" method="POST" enctype="multipart/form-data">
                            <section class="mb-3">
                                <label>Titulo</label>
                                <input type="text" name="title" class="form-control" required value="{{ old('title', $post->title) }}">
                            </section>
                            <section class="mb-3">
                                <label>Image</label>
                                <input type="file" name="file" class="form-control">
                            </section>
                            <section class="mb-3">
                                <label>Contenido</label>
                                <textarea name="body" rows="6" class="form-control" required>{{ old('body', $post->body) }}</textarea>
                            </section>
                            <section class="mb-3">
                                <label>Contenido embebido</label>
                                <textarea name="iframe" rows="6" class="form-control" required>{{ old('iframe', $post->iframe) }}</textarea>
                            </section>
                            <div class="mb-3">
                                @csrf
                                @method('PUT')
                                <input type="submit" value="Actualizar" class="btn btn-sm btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
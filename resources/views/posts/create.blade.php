@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Articulo</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form
                                    action="{{ route('posts.store') }}"
                                    method="POST"
                                    enctype="multipart/form-data"
                            >
                                <section class="mb-3">
                                    <label for="">Titulo *</label>
                                    <input type="text" name="title" class="form-control" required>
                                </section>
                                <section class="mb-3">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" name="file">
                                </section>
                                <section class="mb-3">
                                    <label for="">Contenido *</label>
                                    <textarea name="body" class="form-control" rows="4" required></textarea>
                                </section>
                                <section class="mb-3">
                                    <label for="">Contenido embebido</label>
                                    <textarea name="iframe" class="form-control"></textarea>
                                </section>
                                <section class="mb-3">
                                    @csrf
                                    <input type="submit" value="Enviar" class="btn btn-sm btn-primary">
                                </section>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
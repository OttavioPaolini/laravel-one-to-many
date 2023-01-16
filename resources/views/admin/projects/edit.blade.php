@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2 class="text-center">Modifica {{ $project->title }}</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" name="title" class="form-control"
                            value="{{ old('title', $project->title) }}">
                    </div>
                    <div class="form-group mt-4 mb-4">
                        <label for="cover_image">Img</label>
                        <input type="file" name="cover_image" id="cover_image">
                    </div>
                    <div class="form-group mb-3">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" rows="10" class="form-control">{{ old('content', $project->content) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-warning">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection

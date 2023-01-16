@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-8 row mb-2">
                    <div class="col-2">
                        <label for="title">title</label>
                    </div>

                    <div class="col-10">
                        <input type="text" name="title">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="cover_image">Immagine</label>
                    <input type="file" name="cover_image" id="cover_image"
                        class="form-control @error('cover_image')
                        is-invalid
                        @enderror">
                    @error('cover_image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="form-group mb-3">
                        <label for="type">Categoria</label>
                        <select name="type_id" id="type" class="form-select">
                            <option value="">Nessuna categoria</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" @selected(old('type_id') == $type->id)>{{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-8 row mt-5">
                        <div class="col-2">
                            <label for="content">content</label>
                        </div>

                        <div class="col-10">
                            <textarea name="content" id="content" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4 mb-5 justify-content-start">
                <div class="offset-2 col-1">
                    <button type="submit" class="btn btn-primary">
                        CREA
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.admin')

@section('content')
    <div class="card rounded-0">
        <div class="card-header">
            <h1>{{ __('Редактировать/Обновить категорию') }}</h1>
            <div class="card-body">
                <form action="{{ url('update-category/'. $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="">{{ __('Имя*') }}</label>
                            <input type="text" value="{{ $category->name }}" class="form-control" name="name">
                        </div>
                        <div class="col-md-4">
                            <label for="">{{ __('Текстовый идентификатор (Slug)*') }}</label>
                            <input type="text" value="{{ $category->slug }}" class="form-control" name="slug">
                        </div>
                    </div>
                    <div class="row mb-3">
                        {{-- <div class="col-md-12">
                            <textarea name="description" rows="3" class="form-control">{{ $category->description }}</textarea>
                        </div> --}}
                        <div class="col-md-6 mb-3">
                            <label class="mr-4" for="">{{ __('Status') }}</label>
                            <input type="checkbox" class="form-check-input" {{ $category->status ? 'checked' : '' }} name="status">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="mr-4" for="">{{ __('Popular') }}</label>
                            <input type="checkbox" class="form-check-input" {{ $category->popular ? 'checked' : '' }} name="popular">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="">{{ __('Meta title') }}</label>
                            <input type="text" value="{{ $category->meta_title }}" class="form-control" name="meta_title">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">{{ __('Meta Keywords') }}</label>
                            <textarea name="meta_keywords" rows="3" class="form-control">{{ $category->meta_keywords }}</textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">{{ __('Meta Description') }}</label>
                            <textarea name="meta_description" rows="3" class="form-control">{{ $category->meta_description }}</textarea>
                        </div>
                        @if ($category->image)
                            <img class="w-50" src="{{ asset('assets/upload/category/'. $category->image) }}" alt="Category image">
                        @endif
                        <div class="col-md-12 mb-3">
                            <label for="">{{ __('Загрузить изображение') }}</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">{{ __('Сохранить') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

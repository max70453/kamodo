@extends('layouts.admin')

@section('content')
    <div class="card rounded-0">
        <div class="card-header">
            <h1 class="text-center">{{ __('Редактировать товар') }}</h1>
            <div class="card-body">
                <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12 mb-3">
                            <select class="form-select">
                                <option value="">{{ $products->category->name }}</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="">{{ __('Имя*') }}</label>
                            <input type="text" class="form-control" value="{{ $products->name }}" name="name">
                        </div>
                        <div class="col">
                            <label for="">{{ __('Текстовый идентификатор (Slug)*') }}</label>
                            <input type="text" class="form-control" value="{{ $products->slug }}" name="slug">
                        </div>
                        <div class="col">
                            <label for="">{{ __('Цвет (#fff)') }}</label>
                            <input type="text" class="form-control" value="{{ $products->color->color }}" name="color">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12 mb-3">
                            <label for="">{{ __('Краткое описание') }}</label>
                            <textarea name="small_description" rows="3" class="form-control">{{ $products->small_description }}</textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">{{ __('Описание') }}</label>
                            <textarea name="description" rows="3" class="form-control">{{ $products->description }}</textarea>
                        </div>
                        <div class="row mb-3"></div>
                            <div class="col-md-6 mb-3">
                                <label class="mr-2" for="">{{ __('Оригенальня цена') }}</label>
                                <input class="form-control" type="number" value="{{ $products->original_price }}" name="original_price">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="mr-2" for="">{{ __('Цена продажи') }}</label>
                                <input class="form-control" type="number" value="{{ $products->selling_price }}" name="selling_price">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label class="mr-2" for="">{{ __('Налог') }}</label>
                                <input class="form-control" type="number" value="{{ $products->tax }}" name="tax">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="mr-2" for="">{{ __('Количество') }}</label>
                                <input class="form-control" type="number" value="{{ $products->quantity }}" name="quantity">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label class="mr-4" for="">{{ __('Статус') }}</label>
                                <input class="form-check-input" type="checkbox" {{ $products->status ? 'checked' : '' }} name="status">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="mr-4" for="">{{ __('Модный') }}</label>
                                <input class="form-check-input" type="checkbox" {{ $products->trending ? 'checked' : '' }} name="trending">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 mb-3">
                                <label for="">{{ __('Мета-заголовок') }}</label>
                                <input type="text" class="form-control" value="{{ $products->meta_title }}" name="meta_title">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">{{ __('Мета-Ключевые слова') }}</label>
                                <textarea name="meta_keywords" rows="3" class="form-control">{{ $products->meta_keywords }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">{{ __('Мета-описание') }}</label>
                                <textarea name="meta_description" rows="3" class="form-control">{{ $products->meta_description }}</textarea>
                            </div>
                        </div>
                        @if($products->image)
                            <div style="width: 50%;">
                                <img src="{{ asset('assets/upload/products/'.$products->image) }}" style="width: 100%;" alt="product img">
                            </div>
                        @endif
                        <div class="col-md-12 mb-3 mt-3 pl-0">
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">{{ __('Обновить') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

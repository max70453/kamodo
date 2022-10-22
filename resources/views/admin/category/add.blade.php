{{-- @extends('layouts.admin') --}}

{{-- @section('content') --}}
    {{-- <div class="card rounded-0">
        <div class="card-header">
            <h1 class="text-center">{{ __('Добавить категорию') }}</h1>
            <div class="card-body">
                <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <label for="">{{ __('Имя*') }}</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col">
                            <label for="">{{ __('Текстовый идентификатор (Slug)*') }}</label>
                            <input type="text" class="form-control" name="slug">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12 mb-2">
                            <textarea name="description" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="mr-4" for="">{{ __('Статус') }}</label>
                            <input class="form-check-input" type="checkbox" name="status">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="mr-4" for="">{{ __('Популярный') }}</label>
                            <input class="form-check-input" type="checkbox" name="popular">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="">{{ __('Мета-заголовок') }}</label>
                            <input type="text" class="form-control" name="meta_title">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">{{ __('Мета-Ключевые слова') }}</label>
                            <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">{{ __('Мета-описание') }}</label>
                            <textarea name="meta_description" rows="3" class="form-control"></textarea>
                        </div>
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
    </div> --}}
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="exampleModalLabel">Новая категория</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label for="">{{ __('Имя*') }}</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col">
                        <label for="">{{ __('Текстовая метка (Slug)*') }}</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                </div>
                <div class="row mb-3">
                    {{-- <div class="col-md-12 mb-2">
                        <textarea name="description" rows="3" class="form-control"></textarea>
                    </div> --}}
                    <div class="col-md-6 mb-3 icheck-success d-inline">
                        <label class="mr-4" for="checkboxSuccess1">{{ __('Статус') }}</label>
                        <input class="form-check-input" type="checkbox" name="status" id="checkboxSuccess1">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="mr-4" for="">{{ __('Популярный') }}</label>
                        <input class="form-check-input" type="checkbox" name="popular">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">{{ __('Мета-заголовок') }}</label>
                        <input type="text" class="form-control" name="meta_title">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">{{ __('Мета-Ключевые слова') }}</label>
                        <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">{{ __('Мета-описание') }}</label>
                        <textarea name="meta_description" rows="3" class="form-control"></textarea>
                    </div>
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
      </div>
{{-- @endsection --}}

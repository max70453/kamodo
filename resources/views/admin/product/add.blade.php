<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">{{ __("Новый товар") }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="category_id" data-placeholder="Выберите категорию">
                            {{-- Сюда добавляются options из файла addProductModal.js --}}
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="">{{ __('Имя*') }}</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-6">
                        <label for="">{{ __('Текстовая метка (Slug)*') }}</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    {{-- <div class="col"> --}}
                        {{-- <label for="">{{ __('Цвет (#fff)') }}</label>
                        <input type="color" class="form-control" name="color"> --}}
                    {{-- </div> --}}
                    <div class="mt-3 col-12">
                        <div class="form-group" data-select2-id="29">
                            <label>{{ __("Цвета товара") }}</label>
                                <select id="multi-select" class="form-select-multiple" multiple>
                                    {{-- <option value="value 1">Value 1</option>
                                    <option value="value 2">Value 2</option>
                                    <option value="value 3">Value 3</option> --}}
                                </select>
                          </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 mb-3">
                        <label for="">{{ __('Краткое описание') }}</label>
                        <textarea name="small_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">{{ __('Описание') }}</label>
                        <textarea name="description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="row mb-3"></div>
                        <div class="col-md-6 mb-3">
                            <label class="mr-2" for="">{{ __('Оригенальня цена') }}</label>
                            <input class="form-control" type="number" name="original_price">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="mr-2" for="">{{ __('Цена продажи') }}</label>
                            <input class="form-control" type="number" name="selling_price">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <label class="mr-2" for="">{{ __('Налог') }}</label>
                            <input class="form-control" type="number" name="tax">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="mr-2" for="">{{ __('Количество') }}</label>
                            <input class="form-control" type="number" name="quantity">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <label class="mr-4" for="">{{ __('Статус') }}</label>
                            <input class="form-check-input" type="checkbox" name="status">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="mr-4" for="">{{ __('Модный') }}</label>
                            <input class="form-check-input" type="checkbox" name="trending">
                        </div>
                    </div>
                    <div class="row mb-3">
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

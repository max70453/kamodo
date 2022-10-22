@extends('layouts.admin')

@section('content')
    <div class="card rounded-0">
        <div class="card-header text-center">
            <h2>{{ __('Все товары') }}</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>{{ __('Id') }}</th>
                        <th>{{ __('Категория') }}</th>
                        <th>{{ __('Имя') }}</th>
                        <th>{{ __('Цена продажи') }}</th>
                        <th>{{ __('Изображение') }}</th>
                        <th>{{ __('Действия') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->selling_price }}</td>
                            <td class="text-center w-25">
                                <img src="{{ asset('assets/upload/products/'.$item->image) }}" class="w-25 rounded" alt="Image here">
                            </td>
                            <td class="td-center">
                                <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-primary btn-sm">{{ __('Изменить') }}</a>
                                <a href="{{ url('delete-product/'.$item->id) }}" class="btn btn-danger btn-sm">{{ __('Удалить') }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col col-md-6 ml-3 mb-3">
                <button type="button" class="btn btn-success btn-md" data-bs-toggle="modal" data-bs-target="#addProductModal" data-bs-whatever="">Добавить товар</button>
            </div>
        </div>
    </div>
    @includeIf('admin.product.add')
@endsection



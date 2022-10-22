@extends('layouts.admin')

@section('content')
    <div class="card rounded-0">
        <div class="card-header text-center">
            <h2>{{ __('Все категории') }}</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="pb-3">
                        {{-- <th>{{ __('Id') }}</th> --}}
                        <th class="text-center pb-3 pt-3">{{ __('Имя') }}</th>
                        {{-- <th>{{ __('Описание') }}</th> --}}
                        <th class="text-center pb-3 pt-3">{{ __('Изображение') }}</th>
                        <th class="text-center pb-3 pt-3">{{ __('Действия') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            {{-- <td>{{ $item->id }}</td> --}}
                            <td>{{ $item->name }}</td>
                            {{-- <td>{{ $item->description }}</td> --}}
                            <td class="text-center w-25">
                                <img src="{{ asset('assets/upload/category/'.$item->image) }}" class="w-25 rounded" alt="Image here">
                            </td>
                            <td class="text-right">
                                <a href="{{ url('edit-category/'.$item->id) }}" class="btn btn-outline-primary btn-sm">{{ __('Изменить') }}</a>
                                <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-outline-danger btn-sm">{{ __('Удалить') }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col col-md-6 ml-3 mb-3">
                <button type="button" class="btn btn-success btn-md" data-bs-toggle="modal" data-bs-target="#addCategoryModal" data-bs-whatever="">Добавить категорию</button>
            </div>
        </div>
    </div>
    @includeIf('admin.category.add')
@endsection


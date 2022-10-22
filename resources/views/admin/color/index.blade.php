@extends('layouts.admin')

@section('content')
    <div class="card rounded-0">
        <div class="card-header text-center">
            <h2>{{ __('Все цвета') }}</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        {{-- <th>{{ __('Имя') }}</th> --}}
                        <th>{{ __('Название / HEX код') }}</th>
                        <th>{{ __('Действия') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($colors as $item)
                        <tr>
                            {{-- <td>{{ $item->name }}</td> --}}
                            <td>
                                <span class="badge" style="background-color: {{ $item->color }};">{{ $item->name }}</span>
                                <span> / </span>
                                <span>{{ $item->color }}</span>
                            </td>
                            <td>
                                {{-- <a id="editColorModal" href="" class="btn btn-primary btn-sm">{{ __('Изменить') }}</a> --}}
                                <button  class="btn btn-primary btn-sm btnSubmit" data-bs-toggle="modal" data-bs-target="#editColorModal" value="{{ 'edit-color/'.$item->id }}">{{ __('Изменить') }}</button>
                                {{-- <a href="{{ url('edit-color/'.$item->id) }}" class="btn btn-primary btn-sm btnSubmit" data-bs-toggle="modal" data-bs-target="#editColorModal">{{ __('Изменить') }}</a> --}}
                                <a href="{{ url('delete-colors/'.$item->id) }}" class="btn btn-danger btn-sm">{{ __('Удалить') }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col col-md-6 ml-3 mb-3">
                <button type="button" class="btn btn-success btn-md" data-bs-toggle="modal" data-bs-target="#addColorsModal" data-bs-whatever="">{{ __('Добавить цвет') }}</button>
            </div>
        </div>
    </div>
    @includeIf('admin.color.add')
    @includeIf('admin.color.edit')
@endsection


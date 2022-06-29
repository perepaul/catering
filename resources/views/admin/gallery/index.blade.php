@extends('adminlte::page')

@section('title', 'Contacts')

@section('content_header')
    <h2>Gallery photos</h2>
@endsection

@section('content')
    <x-adminlte-card class="col-md-10 mx-auto">
        <div class="d-flex justify-content-end mb-3">
            <button
                class="btn btn-outline-danger"
                type="button"
                id="mass-delete"
                data-href="{{ url('/admin/galleries') }}"
            >
                <i class="fa fa-trash"></i>
                Mass Delete
            </button>
            <a href="{{route('admin.galleries.create')}}" class="btn btn-outline-primary ml-3">
                <i class="fa fa-plus"></i>
                Add Item
            </a>
        </div>
        <x-table
            id="table"
            class="table-striped"
        >
            <x-slot:header>
                <th>
                    <input
                        type="checkbox"
                        id="checkAll"
                    >
                </th>
                <th>Image</th>
                <th>status</th>
                <th>Date</th>
                <th>actions</th>
            </x-slot:header>

            @if (count($galleries))
                <x-slot:rows>
                    @foreach ($galleries as $gallery)
                        <tr>
                            <td>
                                <input
                                    type="checkbox"
                                    value="{{ $gallery->id }}"
                                >
                            </td>
                            <td>
                                <a href="{{asset($gallery->image)}}" target="_blank">
                                    <img src="{{asset($gallery->image)}}" alt="Gallery image" style="width:60px">
                                </a>
                            </td>
                            <td>{{$gallery->status}}</td>
                            <td>{{ $gallery->created_at }}</td>
                            <td>
                                <a
                                    class="btn btn-outline-primary btn-sm view-contact"
                                    href="{{ route('admin.galleries.edit', $gallery->id) }}"
                                >
                                    <i class="fa fa-edit"></i>
                                </a>
                                <x-adminlte-button
                                    theme="outline-danger btn-sm confirm-delete"
                                    icon="fa fa-trash"
                                    type="button"
                                    data-href="{{ route('admin.galleries.destroy', $gallery->id) }}"
                                />
                            </td>
                        </tr>
                    @endforeach
                    </x-slot>
            @endif
        </x-table>
        <div class="d-flex justify-content-center">
            {{ $galleries->links() }}
        </div>
    </x-adminlte-card>
@endsection

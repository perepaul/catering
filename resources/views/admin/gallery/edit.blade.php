@extends('adminlte::page')
@section('title', 'Edit Gallery')

@section('content_header')
    <h3>Edit Gallery</h3>
@endsection

@section('content')
    <div class="col-lg-4 mx-auto">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.galleries.update',$gallery->id) }}" method="POST" class="p-3"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <x-adminlte-select name="status" label="Status" >
                        <option value="active" @selected(old('status') == 'active' || $gallery->status == 'active')>Active</option>
                        <option value="inactive" @selected(old('status') == 'inactive' || $gallery->status == 'inactive')>Inactive</option>
                    </x-adminlte-select>
                    <x-adminlte-input-file name="image" label="Gallery Image" accept="image/*" />
                    <div class="pt-2">
                        <button class="btn btn-outline-primary">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('adminlte::page')
@section('title', 'Icon & Favicon')

@section('content_header')
    <h3>Icon & Favicon</h3>
@endsection

@section('content')
    <div class="col-lg-4 mx-auto">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.settings.icons') }}" method="POST" class="p-3"
                    enctype="multipart/form-data">
                    @csrf
                    <x-adminlte-input-file name="favicon" label="Favicon" accept="image/*" />
                    <x-adminlte-input-file name="logo" label="Logo" accept="image/*" />
                    <div class="pt-2">
                        <button class="btn btn-outline-primary">
                            Change Icons
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

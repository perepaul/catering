@extends('adminlte::page')
@section('title', 'Change Password')

@section('content_header')
    <h3>Change password</h3>
@endsection

@section('content')
    <div class="col-lg-4 mx-auto">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.password.change') }}" method="POST" class="p-3">
                    @csrf
                    <x-adminlte-input type="password" name="current_password" label="Current Password" />
                    <x-adminlte-input type="password" name="password" label="Password" />
                    <x-adminlte-input type="password" name="password_confirmation" label="Password Confirmation" />
                    <div class="pt-2">
                        <button class="btn btn-outline-primary">
                            Change Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

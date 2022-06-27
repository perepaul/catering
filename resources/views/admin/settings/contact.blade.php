@extends('adminlte::page')
@section('title', 'Contact Settings')

@section('content_header')
    <h3>Contact Settings</h3>
@endsection

@section('content')
    <div class="col-lg-7 mx-auto">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.settings.contact') }}" method="POST" class="p-4"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <x-adminlte-input name="phone" label="Whatsapp number" fgroupClass="col-md-6"
                            placeholder="Whatsapp number eg. +234xxxxxxxxxx" value="{{ $setting?->phone }}" />

                        <x-adminlte-input type="email" name="email" label="Support email"
                            placeholder="Support email address" fgroupClass="col-md-6" value="{{ $setting?->email }}" />
                    </div>
                    <x-adminlte-input name="address" label="Address" placeholder="Business Address"
                        value="{!! $setting?->address !!}" />
                    <x-adminlte-textarea name="chat_script" label="Live Chat" placeholder="Live Chat Script">
                        {!! $setting?->chat_script !!}
                    </x-adminlte-textarea>
                    <div class="row">
                        <x-adminlte-input name="facebook" label="Facebook Link" placeholder="Facebook page link"
                            fgroupClass="col-md-4" value="{{ $setting?->facebook }}" />
                        <x-adminlte-input name="instagram" label="Instagram Link" placeholder="Instagram page link"
                            fgroupClass="col-md-4" value="{{ $setting?->instagram }}" />
                        <x-adminlte-input name="twitter" label="Twitter Link" placeholder="Twitter account link"
                            fgroupClass="col-md-4" value="{{ $setting?->twitter }}" />
                    </div>
                    <x-adminlte-textarea name="open_hours" label="Opening Hours"
                        placeholder="eg. Mon-Fri 9am - 5pm,Sat-Sun 6am-10pm">
                        {{ $setting?->open_hours }}
                    </x-adminlte-textarea>


                    <div class="pt-2">
                        <button class="btn btn-outline-primary">
                            Update details
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

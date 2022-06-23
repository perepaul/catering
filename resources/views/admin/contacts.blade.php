@extends('adminlte::page')

@section('title', 'Contacts')

@section('content_header')
    <h2>Contacts</h2>
@endsection

@section('content')
    <x-adminlte-card>
        <x-adminlte-datatable id="table" :heads="['Name', 'Email', 'Phone', 'Message', 'Actions']">
            @forelse ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>Actions here</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">No contacts found</td>
                </tr>
            @endforelse
        </x-adminlte-datatable>
    </x-adminlte-card>

@endsection

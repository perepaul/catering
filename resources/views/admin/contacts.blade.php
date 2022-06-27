@extends('adminlte::page')

@section('title', 'Contacts')

@section('content_header')
    <h2>Contacts</h2>
@endsection

@section('content')
    <x-adminlte-card>
        <div class="d-flex justify-content-end mb-3">
            <button class="btn btn-outline-danger" type="button" id="mass-delete" data-href="{{ url('/admin/contacts') }}">
                <i class="fa fa-trash"></i>
                Mass Delete
            </button>
        </div>
        <x-table id="table" class="table-striped">
            <x-slot:header>
                <th>
                    <input type="checkbox" id="checkAll">
                </th>
                <th>name</th>
                <th>email</th>
                <th>phone number</th>
                <th>message</th>
                <th>date</th>
                <th>actions</th>
            </x-slot:header>

            @if (count($contacts))
                <x-slot:rows>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $contact->id }}">
                            </td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ Str::limit($contact->message, 50) }}</td>
                            <td>{{ $contact->created_at }}</td>
                            <td>
                                <x-adminlte-button theme="outline-primary btn-sm view-contact" icon="fa fa-eye"
                                    type="button" data-href="{{ route('admin.contacts.show', $contact->id) }}" />
                                <x-adminlte-button theme="outline-danger btn-sm confirm-delete" icon="fa fa-trash"
                                    type="button" data-href="{{ route('admin.contacts.destroy', $contact->id) }}" />
                            </td>
                        </tr>
                    @endforeach
                    </x-slot>
            @endif
        </x-table>
        <div class="d-flex justify-content-center">
            {{ $contacts->links() }}
        </div>
    </x-adminlte-card>

    <x-adminlte-modal id="view-contact-modal" v-centered title="Contact Details" icon="fa fa-link text-sm">
        <x-adminlte-input name="name" label="Name" disabled />
        <x-adminlte-input name="email" label="Email address" disabled />
        <x-adminlte-input name="phone" label="Phone number" disabled />
        <x-adminlte-textarea name="message" label="Message" disabled />
        <x-adminlte-input name="created_at" label="Date" disabled />
    </x-adminlte-modal>
@endsection

@push('js')
    <script>
        $(_ => {
            $('.view-contact').on('click', e => {
                const elem = $(e.currentTarget);

                $.get(elem.data('href'))
                    .done(res => {
                        for (data in res.data) {
                            console.log(data);
                            $(`[name=${data}]`).val(res.data[data]);
                        }
                        $('#view-contact-modal').modal('show');
                    })
                    .fail(err => {
                        alertError('Failed to fetch contact details');
                    })
            })
        })
    </script>
@endpush

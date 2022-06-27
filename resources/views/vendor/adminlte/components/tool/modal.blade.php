<div {{ $attributes->merge(['class' => $makeModalClass(), 'id' => $id]) }}
    @isset($staticBackdrop) data-backdrop="static" data-keyboard="false" @endisset>

    <div class="{{ $makeModalDialogClass() }}">
        <div class="modal-content">

            {{-- Modal header --}}
            <div class="{{ $makeModalHeaderClass() }}">
                <h4 class="modal-title">
                    @isset($icon)
                        <i class="{{ $icon }} mr-2"></i>
                    @endisset
                    @isset($title)
                        {{ $title }}
                    @endisset
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- Modal body --}}
            <div class="modal-body">
                @if (!$slot->isEmpty())
                    {{ $slot }}
                @endif
            </div>

            {{-- Modal footer --}}
            @isset($footerSlot)
                <div class="modal-footer">
                    {{ $footerSlot }}
                    {{-- @else
                <x-adminlte-button class="{{ $makeCloseButtonClass }}"
                    data-dismiss="modal" label="Close"/> --}}
                </div>
            @endisset

        </div>
    </div>

</div>

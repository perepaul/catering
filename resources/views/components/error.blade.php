@error($key)
    <span class="error" id="{{ $key }}_error">{{ $message }}</span>
@else
    <span id="{{ $key }}_error" class="error"></span>
@enderror

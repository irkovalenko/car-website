@props([
'fields' => [],
'submit' => 'Submit',
'action' => '',
'altText' => null,
'altHref' => null,
'altLinkText' => null,
])

<form action="{{ $action }}" method="post" {{ $attributes }}>
    @csrf

    @foreach ($fields as $field)
    @if ($field['divider'] ?? false)
    <hr />
    @else
    @php
    $type = $field['type'] ?? 'text';
    $name = $field['name'];
    @endphp

    <div class="form-group">
        @isset($field['label'])
        <label for="{{ $name }}">{{ $field['label'] }}</label>
        @endisset

        <input id="{{ $name }}" type="{{ $type }}" name="{{ $name }}" placeholder="{{ $field['placeholder'] ?? '' }}"
            @if ($type !=='password' ) value="{{ old($name) }}" @endif />
    </div>
    @endif
    @endforeach

    {{-- Extra content between the fields and the button, e.g. "Reset Password" --}}
    {{ $slot }}

    <button class="btn btn-primary btn-login w-full">{{ $submit }}</button>

    <div class="grid grid-cols-2 gap-1 social-auth-buttons">
        <x-google-button />
        <x-facebook-button />
    </div>

    @if ($altText)
    <div class="login-text-dont-have-account">
        {{ $altText }} -
        <a href="{{ $altHref }}">{{ $altLinkText }}</a>
    </div>
    @endif
</form>
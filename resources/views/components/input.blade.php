<div>
    <label @isset($id) for="{{ $id }}" @endisset class="text-xs text-gray-500">
        {{ $label }}
    </label>

    <input
        id="{{ $id }}"
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ $value }}"
        class="bg-transparent border-b m-auto block border-grey w-full mb-6 text-grey-darker pb-1 rounded focus:bg-gray-200  @error($name) is-invalid @enderror"
        {{ $attributes }}
    />

    @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
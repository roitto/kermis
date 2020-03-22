<div class="mb-6">
    <label @isset($id) for="{{ $id }}" @endisset class="text-xs text-gray-500">
        {{ $label }}
    </label>

    <input
        id="{{ $id }}"
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ $value }}"
        class="bg-transparent border-b m-auto block border-grey w-full text-gray-800 px-2 py-1 rounded focus:bg-gray-200  @error($name) border-2 border-red-400 @enderror"
        {{ $attributes }}
    />

    @error($name)
        <span class="text-red-800 text-bold" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
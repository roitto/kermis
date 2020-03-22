<div
    class="bg-gray-100 shadow p-4 rounded w-1/12 m-2 p-2 cursor-pointer"
    wire:click="changeLocation({{ $resource->id }})"
>
    <span class="font-bold text-xl text-gray-800">
        {{ $resource->name }}
    </span>
</div>

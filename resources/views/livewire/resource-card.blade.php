<div
    class="bg-gray-100 shadow p-4 rounded w-32 h-32 m-2 p-2 cursor-pointer"
    wire:click="changeLocation()"
>
    <i class="fas fa-folder"></i>
    <span class="font-bold text-xl text-gray-800">
        {{ $resource->name }}
    </span>
</div>

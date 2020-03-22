<div class="flex flex-wrap content-start h-full w-full p-6">
    <div class="w-full flex-grow-0">
        {{ $locationName }}
    </div>
    <div class="w-full flex-1 flex flex-wrap">
        @foreach ($resources as $resource)
            <x:resource>
                {{ $resource->name }}
            </x:resource> 
        @endforeach
    </div>
</div>

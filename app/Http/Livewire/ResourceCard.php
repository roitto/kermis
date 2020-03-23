<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ResourceCard extends Component
{
    public $resource;

    public function changeLocation()
    {
        $this->emit('changeLocation', $this->resource->id);
    }

    /**
     * When component is mounted.
     *
     * @return void
     */
    public function mount($resource)
    {
        $this->resource = $resource;
    }

    public function render()
    {
        return view('livewire.resource-card');
    }
}

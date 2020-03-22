<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ResourceCard extends Component
{
    public $resource;

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

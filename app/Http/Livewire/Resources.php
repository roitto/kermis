<?php

namespace App\Http\Livewire;

use App\Resource;
use Livewire\Component;

class Resources extends Component
{
    public $locationId;

    public $locationName = '/';

    public $resources;

    /**
     * When component is mounted.
     *
     * @return void
     */
    public function mount()
    {
        $this->resources = $this->getResources();
    }

    public function changeLocation($locationId = null)
    {
        $location = $locationId ? Resource::where([
            ['type', Resource::TYPEOF_FOLDER],
            ['id', $locationId]
        ])->first() : null;

        $this->locationId = $location ? $location->id : null;
        $this->locationName = $location ? $location->name : '/';
        $this->resources = $this->getResources();
    }

    private function getResources()
    {
        return Resource::where('parent_id', $this->locationId)->get();
    }

    public function render()
    {
        return view('livewire.resources');
    }
}

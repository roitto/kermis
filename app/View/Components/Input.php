<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * The input id.
     *
     * @var string
     */
    public $id;

    /**
     * The input type.
     *
     * @var string
     */
    public $type;

    /**
     * The input name.
     *
     * @var string
     */
    public $name;

    /**
     * The input label.
     *
     * @var string
     */
    public $label;

    /**
     * The input value.
     *
     * @var string
     */
    public $value;

    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct($id, $type, $name, $label, $value)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Arlert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $content;
    public $dataIcon;
    public function __construct($content,$type = "success",$dataIcon ='check')
    {
        $this->type = $type;
        $this->content = $content;
        $this->dataIcon = $dataIcon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.arlert');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ComponentStudy extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $data1;
    public $student;
    public function __construct($data1,$student)
    {
        $this->data1=$data1;
        $this->student=$student;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.component-study');
    }

    //Component Method
    public function addNumber($a){
        return $a+10;
    }
}

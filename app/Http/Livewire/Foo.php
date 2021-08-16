<?php

namespace App\Http\Livewire;

use App\SomeDependency;
use Livewire\Component;

class Foo extends Component
{
    private SomeDependency $dependency;
    public $value;

    public function mount(SomeDependency $dependency)
    {
        $this->dependency = $dependency;
    }

    public function bar()
    {
        $this->value = $this->dependency->whoop();
    }

    public function render()
    {
        return view('livewire.foo');
    }
}

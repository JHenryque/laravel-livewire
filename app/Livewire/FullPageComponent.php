<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class FullPageComponent extends Component
{

    public $number1, $number2, $resul;

    public function mount($number1, $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->resul = $number2 + $number1;
    }
    //#[Layout('components.layouts.new-layout')]
    #[Title('Full PAGE COMPONENT')]
    public function render()
    {
        return view('livewire.full-page-component')->layout('components.layouts.new-layout');
    }
}

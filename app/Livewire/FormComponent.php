<?php

namespace App\Livewire;

use Livewire\Component;

class FormComponent extends Component
{
    public string $name;
    public string $email;

    public function formSubmit()
    {
        $this->name;
        $this->email;
    }

    public function render()
    {
        return view('livewire.form-component');
    }
}

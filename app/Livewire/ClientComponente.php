<?php

namespace App\Livewire;

use Livewire\Component;

class ClientComponente extends Component
{
    public array $client;
    public function mount($client)
    {
        $this->client = $client;
    }

    public function render()
    {
        return view('livewire.client-componente');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class InlineComponent extends Component
{
    public string $name = "José";
    public string $value, $text;


    public function mount($value, $text)
    {
        $this->value = $value;
        $this->text = $text;
    }

    public function render()
    {
        return <<<'HTML'
        <div>
         <p class="display-6 text-cemter text-info">Conteúdo de um componente inline</p>

         <p class="display-6 text-cemter text-info">O atributo da variavel é: <strong class="text-warning">{{ $name }}</strong></p>
          <p class="display-6 text-cemter text-info">O atributo da variavel é: <strong class="text-warning">{{ $value }}</strong></p>
           <p class="display-6 text-cemter text-info">O atributo da variavel é: <strong class="text-warning">{{ $text }}</strong></p>
        </div>
        HTML;
    }
}

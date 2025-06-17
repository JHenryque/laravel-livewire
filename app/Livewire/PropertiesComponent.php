<?php

namespace App\Livewire;

use Livewire\Component;

class PropertiesComponent extends Component
{
    public string $name = "definido o valor da variavel";
    public string $valor2, $valor3;
    public function amount($valor2, $valor3)
    {
        $this->valor2 = $valor2;
        $this->valor3 = $valor3;
    }

    public function render()
    {
        $dados = "outra maneira de variavel";
        return view('livewire.properties-component')->with('dados', $dados);
    }
}

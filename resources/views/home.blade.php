<x-layouts.main-layout>
    <div class="display-6 text-center">Livewire</div>
    <hr>
    @livewire('counter')

    <hr>
    <p>INLINE COMPONENT</p>

    @php
     $variavel = "nova variavel dentro da home"
    @endphp

{{--    <livewire:inline-component value="novo valor" text="outro valor" />--}}
    <livewire:inline-component value="novo valor" :text="$variavel" />

    <livewire:properties-component valor2="valor literal" :valor3="$valor3" />

    <livewire:form-component />
</x-layouts.main-layout>

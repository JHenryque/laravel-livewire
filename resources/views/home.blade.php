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
</x-layouts.main-layout>

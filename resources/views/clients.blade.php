<x-layouts.main-layout>
    <div class="display-6 text-center">
        CLIENTES
    </div>
    <hr>

    <p>Lista de Clientes</p>

    @foreach($clients as $client)
{{--        <livewire:client-componente :$client :key="$client['id']" />--}}
        @livewire('client-componente', ['client' => $client], key($client['id']))
    @endforeach
</x-layouts.main-layout>


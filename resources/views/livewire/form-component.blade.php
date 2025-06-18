<div>
    <hr>
    <form wire:submit="formSubmit">
        <input wire:model="name" type="text" name="name" placeholder="Name">
        <input wire:model="email" type="email" name="email" placeholder="E-mail">
        <button>Submit</button>
    </form>
<hr>
    <div>
        <p>Name: {{ $name }}</p>
        <p>E-mail: {{ $email }}</p>
    </div>
</div>

<div>
    <p>Hello World!</p>
    <p>{{ $constant }}</p>
    <p>{{ $title }}</p>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach

    <button wire:click='createNewUser'
        style="display: flex; flex-direction: column; align-items: center;justify-content: center;">
        Create New User!
    </button>
</div>

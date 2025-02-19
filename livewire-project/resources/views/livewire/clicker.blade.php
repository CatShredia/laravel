<div>
    <form action="" style="display: flex; flex-direction: column; gap: 10px;" wire:submit='createNewUser'>
        <label for="name" class="form-label">Name:</label>
        <input wire:model="name" type="text" name="name" id="name" placeholder="name">
        <label for="email" class="form-label">Email:</label>
        <input wire:model="email" type="text" name="email" id="email" placeholder="email">
        <label for="password" class="form-label">Password:</label>
        <input wire:model="password" type="password" name="password" id="password" placeholder="password">

        <button type="sumbit" class="form-button">Create</button>
    </form>

    <div class="container">
        <div class="user__inner">
            @foreach ($users as $user)
                <p>Name: {{ $user->name }}</p>
            @endforeach
        </div>
    </div>
</div>
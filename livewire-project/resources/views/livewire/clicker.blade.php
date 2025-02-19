<div>
    <form action="" style="display: flex; flex-direction: column; gap: 10px;" wire:submit='createNewUser'>
        @csrf

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <label for="name" class="form-label">Name:</label>
        <input wire:model="name" type="text" name="name" id="name" placeholder="name">
        @error('name')
            <span class="text-xs text-danger-500">{{ $message }}</span>
        @enderror
        <label for="email" class="form-label">Email:</label>
        <input wire:model="email" type="text" name="email" id="email" placeholder="email">
        @error('email')
            <span class="text-xs text-danger-500">{{ $message }}</span>
        @enderror
        <label for="password" class="form-label">Password:</label>
        <input wire:model="password" type="password" name="password" id="password" placeholder="password">
        @error('password')
            <span class="text-xs text-danger-500">{{ $message }}</span>
        @enderror

        <button type="sumbit" class="form-button">Create</button>
    </form>

    <div class="container">
        <div class="user__inner">
            @foreach ($users as $user)
                <p>Name: {{ $user->name }}</p>
            @endforeach

            {{ $users->links() }}
        </div>
    </div>
</div>
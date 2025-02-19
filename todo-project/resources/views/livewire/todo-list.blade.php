<div>
    <div id="content" class="mx-auto" style="max-width:500px;">
        <div class="container py-6 mx-auto content">
            <div class="mx-auto">
                <div id="create-form" class="p-6 bg-white border-t-2 border-blue-500 hover:shadow">
                    <div class="flex ">
                        <h2 class="mb-5 text-lg font-semibold text-gray-800">Create New Todo</h2>
                    </div>
                    <div>
                        <form wire:submit='createTodo'>
                            @csrf
                            <div class="mb-6">
                                <label for="title"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">*
                                    Todo </label>
                                <input type="text" id="title" placeholder="Todo.." name="name" wire:model='name'
                                    class="bg-gray-100  text-gray-900 text-sm rounded block w-full p-2.5">

                                @error('name')
                                    <span class="block mt-3 text-xs text-red-500 ">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit"
                                class="px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-600">Create
                            </button>

                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    <span class="text-xs text-green-500"> {{ session('success') }}
                                    </span>
                                </div>
                            @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('livewire.includes.search')

        <div id="todos-list">
            @foreach ($todos as $todo)
                @include('livewire.includes.todo-card')
            @endforeach

            <div class="my-2">
                {{ $todos->links() }}
            </div>
        </div>
    </div>
</div>

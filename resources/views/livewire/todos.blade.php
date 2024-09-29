<div>
    <h1>Todos</h1>

    <form wire:submit.prevent="addTodo">
        <input wire:model="todo" type="text" placeholder="Add a todo...">
        <button>Add</button>
    </form>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>

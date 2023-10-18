<x-admin-panel>
    <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
        Editar Cliente
    </h2>
    @if ($errors->any())
        <div
            class="min-w-0 p-4 text-white bg-purple-600 rounded-lg shadow-xs"
        >
            <h4 class="mb-4 font-semibold">
                Error
            </h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
    >
        <form action="{{ route('client.update', $client) }}" method="POST">
            @method('PATCH')
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nombre</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="name" name="name" placeholder="Nombre" value={{old('name') ?? $client->name}}>
            </label>
            <br>
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Title</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="address" name="address" placeholder="Direccion" value='{{old('address') ?? $client->address}}'>
            </label>
            <br>
            <label class="block text-sm" for="author">
                <span class="text-gray-700 dark:text-gray-400">Author</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="phone" name="phone" placeholder="Teléfono" value='{{old('phone') ?? $client->phone}}'>
            </label>
            <br>
            <label class="block text-sm" for="pages">
                <span class="text-gray-700 dark:text-gray-400">Pages</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="email" name="email" placeholder="Correo Electrónico" value={{old('email') ?? $client->email}}>
            </label>
            <br>

            <button class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit">Guardar</button>
        </form>
    </div>
</x-admin-panel>

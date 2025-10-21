<x-layout>
    <x-slot:title>Editar post</x-slot:title>

    <div class="w-full flex justify-center">
        <div class="w-[80vw]">
            <h1 class="text-3xl font-bold mt-8">Editar:</h1>
        </div>
    </div>

    <div class="w-[80vw] flex justify-center mx-auto">
        <form method="POST" action="/{{ $post->id }}" class="w-[80%] mb-8">
            @csrf
            @method('PUT')
            <textarea id="message" name="message" rows="4" class="block p-2.5  my-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escreva seu comentário...">{{ old('message', $post->message) }}</textarea>
                @error('message')
                    <div class="label mb-3">
                        <label class="text-red-700 text-sm">{{ $message }}</label>
                    </div>
                @enderror
            
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</button>
            <div class="card-actions justify-between mt-4">
                <a href="/" class="btn btn-ghost btn-sm">Cancelar</a>
            </div>
        </form>
    </div>

</x-layout>

<x-layout>

    <x-slot:title>
        Comentários
    </x-slot:title>

    <div class="w-full flex flex-col items-center ">

        @if (session('success'))
            <div class="w-full animate-fade-out fixed top-0 left-0 flex justify-center">
                <div class="text-amber-50 bg-green-500 font-bold text-2x1 rounded-md mt-4 px-5 py-2 ">{{ session('success') }}</div>
            </div>
        @endif

        <div class="w-[80%] mb-4">
            <h1 class="text-3xl font-bold mt-8">Comentários:</h1>
        </div>
        
        <form method="POST" action="/" class="w-[80%] mb-8">
            @csrf
            <textarea id="message" name="message" rows="4" class="block p-2.5  my-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escreva seu comentário...">{{ old('message') }}</textarea>
                @error('message')
                    <div class="label mb-3">
                        <label class="text-red-700 text-sm">{{ $message }}</label>
                    </div>
                @enderror
           
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

        @forelse ($posts as $post)
            <x-post :post="$post" />
        @empty
            <div class="w-[80%]">
                <div>Ninguém comentou ainda. Seja o primeiro.</div>
            </div>
        @endforelse

    </div>
</x-layout>


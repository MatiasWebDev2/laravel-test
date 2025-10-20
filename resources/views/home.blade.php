
<x-layout>
    <x-slot:title>
        Comentários
    </x-slot:title>
    
    <div class="w-full flex flex-col items-center ">
        <h1 class="text-3xl font-bold mt-8">Comentários:</h1>
        @forelse ($posts as $post)
            <x-post :post="$post" />
        @empty
            <div>
                Ninguém comentou ainda. Seja o primeiro.
            </div>
        @endforelse
    </div>
</x-layout>


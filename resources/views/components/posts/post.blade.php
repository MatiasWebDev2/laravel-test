@props(['post'])
    <div class="w-[80%] my-1 p-6 flex  justify-between bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <div class="pr-6 max-w-[70%]">
            <a href="#">
            <h5 class="mb-2 text-1xl font-bold tracking-tight text-gray-900 dark:text-white">{{$post->user ? $post->user->email : 'Anônimo'}}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->message }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
        </div>
        <div class="w-[15%] flex justify-between">
            <a href="/{{ $post->id }}/edit" class="btn btn-ghost btn-xs text-blue-800">Editar</a>
            
            <form method="POST" action="/{{ $post->id }}">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Tem certeza que quer deletar?')" class="btn btn-ghost btn-xs text-red-700">
                    Delete
                </button>
            </form>
        </div>
    </div>

<x-layout>
    <x-slot:title>
        Livros
    </x-slot:title>

    @if(session('success'))
        {{ session('success') }}
    @endif

    <x-livros.formulario/>

    Livros:
    @forelse ( $livros as $livro)
        <x-livros.livro :livro="$livro"/>
    @empty
        Nenhum livro cadastrado ainda
    @endforelse

</x-layout>
<x-layout>

    <x-slot:title>

        Custom Title

    </x-slot>
<h2>{{ $book->title }}</h2>
<h3>{{ $book->author }}</h3>
<p>{{ $book->released_at }}</p>
@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
</x-layout>
<h1>Edit book</h1>
<x-layout>

    <x-slot:title>

        Custom Title

    </x-slot>

<form action="/books/{{ $book->id }}/update" method="post">
    @csrf
    @method('put')

    <input type="text" name="title" placeholder="title goes here" value="{{ $book->title }}">
    <input type="text" name="author" placeholder="author goes here" value="{{ $book->author }}">
    <input type="date" name="released_at" placeholder="date goes here" value="{{ $book->released_at }}">
    <input type="submit" value="Update">
</form>
</x-layout>
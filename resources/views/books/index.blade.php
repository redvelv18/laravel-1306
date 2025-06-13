<h1>Books</h1>
<a href="/books/create">Create a book</a>
<ul>
    @foreach($books as $book)
        <li>
            <h2>{{ $book->title }}</h2>
            <p>{{ $book->author }}</p>
            <div>
                <a href="/books/{{ $book->id }}">Show</a>
                <a href="/books/{{ $book->id }}/edit">Edit</a>
            </div>
            <form action="/books/{{ $book->id }}/destroy", method="get">
                @csrf
                @method("DELETE")
                <button>Delete</button>
            </form>
        </li>
    @endforeach
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
</ul>
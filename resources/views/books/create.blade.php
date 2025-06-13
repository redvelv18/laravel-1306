<h1>New book</h1>

<form action="/books/store" method="post">
    @csrf
    <input type="text" placeholder="title goes here" name="title">
    <input type="text" placeholder="author goes here" name="author">
    <input type="date" placeholder="date goes here" name="released_at">
    <input type="submit" value="Create">
</form>
@if ($errors->any())

<div class="alert alert-danger">

    <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif
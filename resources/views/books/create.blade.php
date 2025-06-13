<h1>New book</h1>

<form action="/books" method="post">
    @csrf
    @method("GET")
    <input type="text" placeholder="title goes here">
    <input type="text" placeholder="author goes here">
    <input type="date" placeholder="date goes here">
    <input type="submit" value="Create">
</form>
<form action="{{route('product.store')}}" method="POST">
    @csrf
    Produktname: <input type="text" name="name" value="">
    <br>
    Preis: <input type="text" name="price" value="">
    <br>
    Beschreibung: <input type="text" name="description" value="">
    <br>
    <input type="submit">
</form>

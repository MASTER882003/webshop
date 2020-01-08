<form action="{{route('product.update', ['product' => $product])}}" method="POST">
    @csrf
    <input type="text" name="name">
    <input type="submit">
</form>

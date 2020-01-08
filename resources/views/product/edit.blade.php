<form action="{{route('product.update', ['product' => $product])}}" method="POST">
    @csrf
    <input type="text" name="name" value="{{$product->name}}">
    <br>
    <input type="text" name="price" value="{{$product->price}}">
    <br>
    <input type="text" name="description" value="{{$product->description}}">
    <br>
    <input type="submit">
</form>

@foreach($products as $product)
    <a href="{{route('product.show', ['product'=>$product->id])}}">
        {{$product->name}}
    </a>
    - {{$product->price}} Fr.
    <a href="{{route('product.destroy',  ['product'=>$product->id])}}">Produkt löschen</a>
    <br>
@endforeach

<a href="{{route('product.create')}}">Neues Produkt erstellen</a>

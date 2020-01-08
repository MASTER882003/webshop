<h1>{{$product->name}}</h1>
<br>
<price>{{$product->price}}</price>
<p>
    {{$product->description}}
</p>

<a href="{{route('product.index')}}">Zur Übersicht</a>
<a href="{{route('product.edit',['product'=>$product->id])}}">Produkt bearbeiten</a>

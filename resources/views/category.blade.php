@foreach($categories as $category)
    {{$category->nameOfCategory}}:<br>
    @foreach($category->product as $product)
        <li>{{$product->name}}</li>
    @endforeach
    <br>
@endforeach

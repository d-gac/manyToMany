@foreach($products as $product)
    {{$product->name}}:<br>
    @foreach($product->category as $category)
        <li>{{$category->nameOfCategory}}</li>
    @endforeach
    <br>
@endforeach

@foreach ($children as $subcategory)
<ul class="active menu-item-has-children">
    @if(count($subcategory->children))
        <li style="color:lightskyblue; font-family:'Arial Black' "> {{$subcategory->title  }}</li>
        <ul class="active menu-item-has-children">
            @include('home.categorytree',['children'=>$subcategory->children])
        </ul>
    <hr>
    @else
    <li><a href="{{route('categorytreatments',['id'=>$subcategory->id,'slug'=>$subcategory->title] ) }}">{{$subcategory->title  }}</a></li>
    @endif
</ul>
@endforeach

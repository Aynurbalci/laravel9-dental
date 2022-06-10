@foreach($children as $subcategory)
        @if(count($subcategory->children))
            <li style="color: #1D00AF;font-family: 'Arial Black'"> {{$subcategory->title}}
            <ul class="children">
             @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
            </li>
            <hr>
        @else
        <li><a href="{{route('categorytreatments',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
        @endif
@endforeach


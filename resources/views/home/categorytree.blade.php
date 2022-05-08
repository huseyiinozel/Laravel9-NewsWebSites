@foreach($children as $subcategory)
    <li class="has-children">
        <a href="{{route('categorynews',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}" >{{$subcategory->title}}</a>
        @if(count($subcategory->children))


            <ul class="sub-menu">
                @include('home.categorytree',['children'=>$subcategory->children])

            </ul>


        @else

            @endif






        @endforeach

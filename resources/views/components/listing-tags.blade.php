@props(['tagsCsv'])

@php
 $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @foreach($tags as $tag)
  
    <li {{ $attributes->merge(['class' => 'flex items-center justify-center bg-stone-100 text-slate-500 rounded-xl py-1 px-3 mr-2 text-xs border']) }}>
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>
{{-- <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
    <a href="#">Vue</a>
</li> --}}
@props(['title', 'color'])

<a {{$attributes->merge(['class' => ""])}}>
    <svg class="fill-current h-6 w-6 hover:text-{{$title}}" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <title>{{$title}}</title>
        {{$slot}}
    </svg>
</a>

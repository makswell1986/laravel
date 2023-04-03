<x-layout>

<div class='container'>
 @foreach($posts as $elem)

<div class='section'>
<div class='title'>{{ $elem->getPost->title }}</div>    
<div class='time'>{{ $elem->getPost->updated_at }} / <a href="/category/{{ $elem->getPost->category_id }}">{{ $elem['tags'] }}</a></div>    
<div class='body'>{{ $elem->getPost->body }}</div>    
</div>
@endforeach
</div>
</x-layout>

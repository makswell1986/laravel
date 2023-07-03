<x-layout>

<div class='container'>
 @foreach($posts as $elem)

<div class='section'>
<div class='title'>{{ $elem['title'] }}</div>    
<div class='time'>{{ $elem['updated_at'] }} / <a href="/category/{{ $elem->category_id }}">{{ $elem['getTag']['tags'] }}</a></div>    
<div class='body'>{{ $elem['body'] }}</div>    
</div>
@endforeach
<div class='text-center'>
{{ $posts->links() }}
</div>
</x-layout>

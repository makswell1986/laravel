<x-layout>
 <div class='container'>
    <div class='text-center mt-1 mb-1'><h2>{{ __('add history')}}</h2></div>
<form method='get' action="{{ route('form',['locale'=>app()->getLocale()]) }}">
  <div class="mb-3">
    <label for="title" class="form-label">{{__('title')}}</label>
    <input type="text" class="form-control" id="title" aria-describedby="title" name='title' value="{{ old('title')}}">
    @error('title')
    <p class='mt-1 mb-1 text-red'>{{ $message }}</p>
    @enderror
    <div id="title" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="tag" class="form-label">{{__('tag')}}</label>
    <select class="form-select" name='tag' >
    
    @foreach($posts as $post)
        <option value="{{ $post->annoucement_id }}">{{ $post->tags }}</option>
    
    @endforeach
</select>
  </div>
 
  <div class="mb-3">
  <label for="text" class="form-label">{{__('text')}}</label>
    <textarea class='form-control' id='text' name='text' value="{{ old('text')}}"></textarea>
    @error('text')
    <p class='mt-1 mb-1 text-red'>{{ $message }}</p>
    @enderror
      </div>
  <button type="submit" class="btn btn-primary">{{__('submit')}}</button>
</form>
<div>
@if (session()->has('success'))
<div class="text-bg-primary p-3 mt-1 text-center">
{{ session('success')}}
</div>
@endif
</div>
</div>
</x-layout>

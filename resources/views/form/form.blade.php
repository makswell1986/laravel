<x-layout>
 <div class='container'>
    <div class='text-center mt-1 mb-1'><h2>Добавить историю</h2></div>
<form method='get' action='/form'>
  <div class="mb-3">
    <label for="title" class="form-label">Название</label>
    <input type="text" class="form-control" id="title" aria-describedby="title" name='title'>
    @error('title')
    <p class='mt-1 mb-1 text-red'>{{ $message }}</p>
    @enderror
    <div id="title" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="tag" class="form-label">Тэг</label>
    <select class="form-select" name='tag'>
    
    @foreach($posts as $post)
        <option>{{ $post->tags }}</option>
    
    @endforeach
</select>
  </div>
 
  <div class="mb-3">
  <label for="text" class="form-label">Текст</label>
    <textarea class='form-control' id='text' name='text'>

    </textarea>
      </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</x-layout>

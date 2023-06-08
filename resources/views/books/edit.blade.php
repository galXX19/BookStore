<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Edit Book Entry</h2>
      </header>
  
      <form method="POST" action="/books/{{$book->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
  
        <div class="mb-6">
          <label for="title" class="inline-block text-lg mb-2">Book Title</label>
          <input type="text" class="border border-black-200 rounded p-2 w-full" name="title"
            value="{{$book->title}}" />
  
          @error('title')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="author" class="inline-block text-lg mb-2"> Author </label>
          <input type="text" class="border border-black-200 rounded p-2 w-full" name="author"
            value="{{$book->author}}" />
  
          @error('author')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="tags" class="inline-block text-lg mb-2">
            Tags (Comma Separated)
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
            placeholder="Example: Genre or Year" value="{{$book->tags}}" />
  
          @error('tags')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Update Book Entry
          </button>
  
          <a href="/" class="text-black ml-4"> Back </a>
        </div>
      </form>
    </x-card>
</x-layout>
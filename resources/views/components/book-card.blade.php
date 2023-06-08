@props(['book'])

<x-card>
  <div class="flex"> 
      <h3 class="text-2xl">
        <a href="/books/{{$book->id}}">{{$book->title}}</a>
      </h3>
      <div class="text-xl font-bold mb-4">{{$book->author}}</div>
      <x-book-tags :tagsCsv="$book->tags" />
    </div>
  </div>
</x-card>
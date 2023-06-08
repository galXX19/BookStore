<x-layout>

    <a href="/" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
        </a>
        <div class="mx-4">
            <x-card class="p-10">
                <div
                    class="flex flex-col items-center justify-center text-center">
    
                        <h3 class="text-2xl mb-2">{{$book->title}}r</h3>
                        <div class="text-xl font-bold mb-4">{{$book->author}}</div>
                        <x-book-tags :tagsCsv="$book->tags" />
                        <div class="text-lg my-4"> </div>
                        <div class="border border-gray-200 w-full mb-6"></div>
                    
                    </div>
                </x-card>
            
        </div>
    </x-layout>
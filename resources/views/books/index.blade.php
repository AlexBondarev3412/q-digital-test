<x-app-layout>
    <x-slot name="header">
        <div
            class="mx-auto pt-4 text-center items-center px-2 h-14 bg-[#002538] text-white text-base font-bold leading-tight">
            {{ $title }}
        </div>
    </x-slot>

    <div class="py-1">
        @if(!empty($books))
            @foreach($books as $index => $book)
                <x-book-list-item :index="$index+1" :book="$book"/>
            @endforeach
        @endif
    </div>
</x-app-layout>

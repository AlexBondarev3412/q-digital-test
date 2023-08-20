<x-app-layout>
    <x-slot name="header">
        <div
            class="mx-auto pt-4 text-center items-center px-2 h-14 bg-[#002538] text-white text-base font-bold leading-tight">
            Library - Info
        </div>
    </x-slot>
    <div class="py-1 items-center">
        <div class="w-auto px-3 mx-auto bg-white rounded-sm shadow flex flex-col">
            <div class="mt-4 text-left text-black text-xl font-normal leading-normal">{{ $book['title'] }}</div>
            @foreach($book->authors as $author)
                <div
                    class="flex whitespace-nowrap overflow-hidden w-min max-w-[255px]  h-6 px-2 bg-sky-100 rounded-xl border border-blue-300 text-sky-900 py-1 text-center text-xs font-normal leading-3">{{$author['name']}}</div>
            @endforeach

            <div
                class="mt-2 pr-3 w-auto h-min max-h-80 scrollbar scrollbar-thumb-sky-600 scrollbar-track-neutral-300 scrollbar-medium h-[455px] overflow-y-auto text-neutral-600 text-sm font-normal leading-normal">
                {!! $book['description'] !!}
            </div>
            <div class="mt-2"></div>
        </div>
    </div>
</x-app-layout>

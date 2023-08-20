<x-app-layout>
    <x-slot name="header">
        <form>
            <div class="px-2 h-16 bg-[#002538]">
                <div class="pt-3 relative mx-auto text-gray-600">
                    <button type="submit" class="absolute left-2 top-0 mt-5 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path id="Mask" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9.22001 0.333344C4.43354 0.333344 0.553345 4.21354 0.553345 9.00001C0.553345 13.7865 4.43354 17.6667 9.22001 17.6667C14.0065 17.6667 17.8867 13.7865 17.8867 9.00001C17.8867 4.21354 14.0065 0.333344 9.22001 0.333344ZM9.22001 1.70001C12.1732 1.69731 14.8371 3.47419 15.9691 6.2018C17.1011 8.92941 16.4782 12.0704 14.3909 14.1595C12.3037 16.2487 9.16327 16.8745 6.43463 15.745C3.70599 14.6155 1.92668 11.9532 1.92668 9.00001C1.9449 4.9785 5.19852 1.7219 9.22001 1.70001ZM16.7533 15.58L21.6667 20.5267C21.8346 20.6958 21.8995 20.9416 21.837 21.1716C21.7746 21.4016 21.5941 21.5807 21.3637 21.6416C21.1333 21.7025 20.8879 21.6358 20.72 21.4667L15.8067 16.52L16.7533 15.58Z"
                                  fill="#0079B8"/>
                        </svg>
                    </button>
                    <input
                        class="w-full border-2 border-gray-300 bg-white h-10 pl-10 rounded-lg text-sm focus:outline-none"
                        type="search" name="search" placeholder="Search">

                </div>
            </div>
        </form>
    </x-slot>

    <div class="py-1">
        @if(!empty($books))
            @foreach($books as $index => $book)
                <x-book-search-item :index="$index+1" :book="$book"/>
            @endforeach
        @endif
    </div>
</x-app-layout>

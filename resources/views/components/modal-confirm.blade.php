<div id="confirmModal{{ $index }}" tabindex="-1" aria-hidden="true"
     class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-80 h-full max-w-2xs md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    {{ $title }}
                </h3>
                <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="confirmModal{{ $index }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <g id="dismiss">
                            <path id="icon" d="M12.94 12L18.4667 6.47333C18.6932 6.20883 18.678 5.81454 18.4317 5.56829C18.1855 5.32204 17.7912 5.30681 17.5267 5.53333L12 11.06L6.47336 5.52667C6.21194 5.26525 5.78811 5.26525 5.52669 5.52667C5.26528 5.78808 5.26528 6.21192 5.52669 6.47333L11.06 12L5.52669 17.5267C5.33644 17.6896 5.25357 17.9454 5.31215 18.1889C5.37073 18.4325 5.56088 18.6226 5.80441 18.6812C6.04794 18.7398 6.30376 18.6569 6.46669 18.4667L12 12.94L17.5267 18.4667C17.7912 18.6932 18.1855 18.678 18.4317 18.4317C18.678 18.1855 18.6932 17.7912 18.4667 17.5267L12.94 12Z" fill="#737373"/>
                        </g>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="px-4">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $text }}

                </p>
            </div>
            <!-- Modal footer -->
            <form action="{{ $action }}" method="{{ $method }}">
                @csrf
                {{$slot}}
                <input type="hidden" name="book_id" value="{{$book['uid']}}">
                <div
                    class="flex items-center justify-end p-4 space-x-2 border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" data-modal-toggle="confirmModal{{ $index }}"
                            class="w-20 mr-2 h-6 bg-sky-600 rounded-sm text-center text-white text-xs font-semibold uppercase leading-3 tracking-wide">
                        Yes
                    </button>
                    <button data-modal-toggle="confirmModal{{ $index }}" type="button"
                            class="w-20 h-6 bg-red-600 rounded-sm  text-center text-white text-xs font-semibold uppercase leading-3 tracking-wide">
                        No
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

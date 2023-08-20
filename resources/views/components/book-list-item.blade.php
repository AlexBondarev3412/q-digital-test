<div class="h-14 flex border-stone-300 border-[1px] mb-[1px] bg-neutral-50">
    <div class="border-l-[6px] @if($book['pivot']['favourite']) border-[#62A420]  @else border-zinc-100 @endif"></div>
    <div class="m-auto ml-2 w-14 text-neutral-600 text-sm font-normal">{{ $index }}.</div>
    <div class="m-auto flex-1 w-64 text-neutral-600 text-sm font-normal">{{ $book['title'] }}</div>
    <form action="{{ route('books.favourite_toggle', ['book' => $book['id']]) }}" method="POST" class="m-auto">
        @csrf
        <button
            class="m-auto w-6 h-6 mr-2   text-center text-white text-xs font-semibold uppercase leading-3 tracking-wide @if($book['pivot']['favourite']) bg-gray-500  @else bg-lime-600 @endif rounded-sm"
        >
            {{ $book['pivot']['favourite'] ? 'U' : 'F' }}
        </button>
    </form>

    <button
        class="m-auto w-6 h-6 mr-2  text-center text-white text-xs font-semibold uppercase leading-3 tracking-wide bg-red-600 rounded-sm"
        data-modal-toggle="confirmModal{{ $index }}">
        D
    </button>
    <a
        class="m-auto w-6 h-6 pt-2 mr-2  text-center text-white text-xs font-semibold uppercase leading-3 tracking-wide bg-sky-600 rounded-sm"
        href="{{ route('books.show', $book) }}">
        I
    </a>
    <x-modal-confirm :index="$index" :book="$book" :action="route('books.destroy', ['book' => $book['id']])"
                     :method="'POST'">
        @method('DELETE')
        <x-slot name="title">
            Delete book
        </x-slot>
        <x-slot name="text">
            Are you sure you want to delete this book?
        </x-slot>
    </x-modal-confirm>
</div>

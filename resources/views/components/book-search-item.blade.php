<div class="h-14 flex border-stone-300 border-[1px] mb-[1px] bg-neutral-50">
    <div class="border-l-[6px] @if($book['favourite']) border-[#62A420]  @else border-zinc-100 @endif"></div>
    <div class="m-auto ml-2 w-14 text-neutral-600 text-sm font-normal">{{ $index }}.</div>
    <div class="m-auto flex-1 w-64 text-neutral-600 text-sm font-normal">{{ $book['title'] }}</div>
    @if(!$book['added'])
        <button
            class="m-auto w-20 h-6 mr-2  text-center text-white text-xs font-semibold uppercase leading-3 tracking-wide bg-lime-600 rounded-sm"
            data-modal-toggle="confirmModal{{ $index }}">
            ADD
        </button>
    @endif
    <x-modal-confirm :index="$index" :book="$book" :action="route('books.store')" :method="'POST'">
        <x-slot name="title">
            Add book
        </x-slot>
        <x-slot name="text">
            Are you sure you want to add this book?
        </x-slot>
    </x-modal-confirm>
</div>

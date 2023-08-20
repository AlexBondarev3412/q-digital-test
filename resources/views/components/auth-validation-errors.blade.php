@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="w-full pl-2 py-1.5 bg-red-700 justify-start items-center flex-col text-white">
            <div class="pr-[6.16px] justify-start items-center gap-[6.40px] inline-flex">
                <div class="w-6 h-6 relative flex-col justify-start items-start flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <g id="exclamation-circle / line">
                            <path id="icon" fill-rule="evenodd" clip-rule="evenodd" d="M4 12C4 7.58172 7.58172 4 12 4C14.1217 4 16.1566 4.84285 17.6569 6.34315C19.1571 7.84344 20 9.87827 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM11.1333 12.5133C11.1333 12.992 11.5214 13.38 12 13.38C12.4786 13.38 12.8667 12.992 12.8667 12.5133V8.51333C12.8667 8.03469 12.4786 7.64667 12 7.64667C11.5214 7.64667 11.1333 8.03469 11.1333 8.51333V12.5133ZM12 18.6667C8.3181 18.6667 5.33333 15.6819 5.33333 12C5.33333 8.3181 8.3181 5.33333 12 5.33333C15.6819 5.33333 18.6667 8.3181 18.6667 12C18.6667 13.7681 17.9643 15.4638 16.714 16.714C15.4638 17.9643 13.7681 18.6667 12 18.6667ZM12.9667 15.3467C12.9667 15.899 12.519 16.3467 11.9667 16.3467C11.4144 16.3467 10.9667 15.899 10.9667 15.3467C10.9667 14.7944 11.4144 14.3467 11.9667 14.3467C12.519 14.3467 12.9667 14.7944 12.9667 15.3467Z" fill="white"/>
                        </g>
                    </svg>
                </div>
                <div class="text-xs font-normal leading-3">Alert message</div>

            </div>
            <ul class="list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

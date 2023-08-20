<div class="fixed bottom-0 w-full bg-zinc-100">
    <div class="w-full h-0.5 left-0 top-0 absolute opacity-20 bg-neutral-600"></div>
    <nav class="flex justify-between items-center bg-gray-100 p-4 ">
        <div class="flex-1 flex justify-center items-center flex-col">
            <a href="{{ route('books.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="29" viewBox="0 0 25 29" fill="none">
                    <g id="Group 1">
                        <path id="Vector (Stroke)" fill-rule="evenodd" clip-rule="evenodd"
                              d="M25 24.8571C25 27.1452 23.1345 29 20.8333 29L4.16667 29C1.86548 29 1.74519e-06 27.1452 1.54517e-06 24.8571L5.45631e-06 4.14285C5.25629e-06 1.85482 1.86548 -1.79221e-06 4.16667 -1.99339e-06L17.5296 -1.25427e-06L25 7.4277L25 24.8571ZM20.8333 24.8571L20.8333 10.3571L14.5833 10.3571L14.5833 4.14286L4.16667 4.14285L4.16667 24.8571L20.8333 24.8571Z"
                              fill="#5C426C"/>
                        <path id="Line (Stroke)" fill-rule="evenodd" clip-rule="evenodd" d="M8 8L3 8L3 6L8 6L8 8Z"
                              fill="#5C426C"/>
                        <path id="Line (Stroke)_2" fill-rule="evenodd" clip-rule="evenodd" d="M9 11L3 11L3 9L9 9V11Z"
                              fill="#5C426C"/>
                    </g>
                </svg>
            </a>
        </div>
        <div class="flex-1 flex justify-center items-center flex-col">
            <a href="{{ route('search') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none">
                    <g id="Group 2">
                        <path id="Vector (Stroke)" fill-rule="evenodd" clip-rule="evenodd"
                              d="M4 24L10 24L10 28L4 28C1.79086 28 1.75079e-06 26.2091 1.55766e-06 24L5.53125e-06 4C5.33812e-06 1.79086 1.79086 3.42355e-08 4 -1.58894e-07L16.8284 6.26959e-07L24 7.17157L24 14L20 14L20 10L14 10L14 4L4 4L4 24Z"
                              fill="#5C426C"/>
                        <path id="Line (Stroke)" fill-rule="evenodd" clip-rule="evenodd"
                              d="M24 24L12 24L12 20L24 20V24Z" fill="#5C426C"/>
                        <path id="Line (Stroke)_2" fill-rule="evenodd" clip-rule="evenodd"
                              d="M16 28L16 16L20 16L20 28L16 28Z" fill="#5C426C"/>
                    </g>
                </svg>
            </a>
        </div>
        <div class="flex-1 flex justify-center items-center flex-col">
            <a href="{{ route('books.index', ['favourite' => 1]) }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <g id="Group 3">
                        <path id="Rectangle 2.4 (Stroke)" fill-rule="evenodd" clip-rule="evenodd"
                              d="M0 4.97857C0 2.22898 2.22898 0 4.97857 0H5.36154C8.17819 0 10.4615 2.28335 10.4615 5.1V6.55714H17V9.95714H10.4615V17H7.06154V9.95714H4.97857C2.22898 9.95714 0 7.72816 0 4.97857ZM7.06154 6.55714V5.1C7.06154 4.16112 6.30042 3.4 5.36154 3.4H4.97857C4.10675 3.4 3.4 4.10675 3.4 4.97857C3.4 5.85039 4.10675 6.55714 4.97857 6.55714H7.06154Z"
                              fill="#5C426C"/>
                        <path id="Rectangle 2.5 (Stroke)" fill-rule="evenodd" clip-rule="evenodd"
                              d="M24 4.97857C24 2.22898 21.8147 0 19.119 0H19C16.2386 0 14 2.28335 14 5.1V17H17.3333V9.95714H19.119C21.8147 9.95714 24 7.72816 24 4.97857ZM17.3333 6.55714V5.1C17.3333 4.16112 18.0795 3.4 19 3.4H19.119C19.9738 3.4 20.6667 4.10675 20.6667 4.97857C20.6667 5.85039 19.9738 6.55714 19.119 6.55714H17.3333Z"
                              fill="#5C426C"/>
                        <path id="Rectangle 2.6 (Stroke)" fill-rule="evenodd" clip-rule="evenodd"
                              d="M24 19C24 21.7614 21.7167 24 18.9 24L18.6385 24C15.8218 24 13.5385 21.7614 13.5385 19L13.5385 17.3333L7 17.3333L7 14L18.9 14C21.7167 14 24 16.2386 24 19ZM16.9385 17.3333L16.9385 19C16.9385 19.9205 17.6996 20.6667 18.6385 20.6667L18.9 20.6667C19.8389 20.6667 20.6 19.9205 20.6 19C20.6 18.0795 19.8389 17.3333 18.9 17.3333L16.9385 17.3333Z"
                              fill="#5C426C"/>
                        <path id="Rectangle 2.7 (Stroke)" fill-rule="evenodd" clip-rule="evenodd"
                              d="M4.37114e-07 19C1.95703e-07 21.7614 2.23858 24 5 24C7.76142 24 10 21.7614 10 19L10 14L5 14C2.23858 14 6.78525e-07 16.2386 4.37114e-07 19ZM5 20.6667C4.07953 20.6667 3.33333 19.9205 3.33333 19C3.33333 18.0795 4.07953 17.3333 5 17.3333L6.66667 17.3333L6.66667 19C6.66667 19.9205 5.92047 20.6667 5 20.6667Z"
                              fill="#5C426C"/>
                    </g>
                </svg>
            </a>
        </div>
    </nav>
</div>

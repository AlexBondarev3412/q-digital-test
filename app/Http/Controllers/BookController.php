<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Library';
        $query = Auth::user()->books();
        if ($request->has('favourite')) {
            $query =  $query->where('favourite', 1);
            $title .= ' - Favourite';
        }
        $books = $query->get();
        return view('books.index', compact('books', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $books = [];
        if (isset($request['search']) && !empty($request['search'])) {
            $response = Http::get('https://www.googleapis.com/books/v1/volumes?q=' . $request['search']);
            if ($response->successful() && !empty($result = $response->json()) && !empty($result['items'])) {
                $book_ids = array_column($result['items'], 'id');
                $user_books = Auth::user()->books()->whereIn('uid', $book_ids)->get();
                foreach ($result['items'] as $book) {
                    $authors = [];
                    foreach ($book['volumeInfo']['authors'] as $author) {
                        $authors[] = ['name' => $author];
                    }
                    $books[] = [
                        'uid' => $book['id'],
                        'title' => $book['volumeInfo']['title'] ?? 'Без названия',
                        'description' => $book['volumeInfo']['description'] ?? 'Без описания',
                        'added' => $user_books->firstWhere('uid', $book['id']) ? 1 : 0,
                        'favourite' => $user_books->firstWhere('uid', $book['id'])['pivot']['favourite'] ?? 0
                    ];
                }
            }

        }
        //
        return view('books.create', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        $validated = $request->validated();
        $response = Http::get('https://www.googleapis.com/books/v1/volumes/' . $validated['book_id']);
        if ($response->successful() && !empty($result = $response->json()) && !empty($result['id'])) {
            $book_info = [
                'uid' => $result['id'],
                'title' => $result['volumeInfo']['title'] ?? 'Без названия',
                'description' => $result['volumeInfo']['description'] ?? 'Без описания',
            ];
            $book = Book::firstOrCreate($book_info);
            if (!empty($result['volumeInfo']['authors'])) {
                $authors = [];
                foreach ($result['volumeInfo']['authors'] as $author) {
                    $authors[] = Author::firstOrCreate(['name' => $author])['id'];

                }
                $book->authors()->sync($authors);
                Auth::user()->books()->attach($book);
            }

        }

        return redirect((url()->previous()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($book_id)
    {
        $book = Auth::user()->books()->with('authors')->where('book_id', $book_id)->first();
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    public function favourite_toggle(Book $book)
    {
        $user_book = Auth::user()->books()->withPivot('favourite')->where('book_id', $book['id'])->get()->first();
        Auth::user()->books()->updateExistingPivot($book['id'], ['favourite' => !$user_book->pivot->favourite]);
        return redirect((url()->previous()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect((url()->previous()));
    }
}

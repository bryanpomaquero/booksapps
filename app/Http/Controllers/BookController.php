<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;

/**
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class BookController extends Controller
{
    use DisableAuthorization;

    /**
     * @var string
     */
    protected $model = Book::class;

    /**
     * @var string
     */
    protected $request = BookRequest::class;

    // /**
    //  * Display a listing of the resource.
    //  */
    // public function index(Request $request)
    // {
    //     $book = Book::all();

    //     return [
    //         'book' => $book
    //     ];
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create(Request $request)
    // {
    //     $title = $request->input('title');
    //     $details = $request->input("details");
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(StoreBookRequest $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Request $request, $id)
    // {

    //     $data = Book::find($id);

    //     return [
    //         'data' => $data->category
    //     ];
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Book $book)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdateBookRequest $request, Book $book)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Book $book)
    // {
    //     //
    // }
}

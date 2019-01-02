<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class BookController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
       $books = Book::all();
       return $this->successResponse($books);
    }


    /**
     * Store a single book information
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $rules = [
            'title'         =>  'required|max:255',
            'description'   =>  'required',
            'price'         =>  'required|min:1',
            'author_id'     =>  'required|min:1',
        ];
        $this->validate($request, $rules);

        $book = Book::create($request->all());

        return $this->successResponse($book, Response::HTTP_CREATED);
    }


    /**
     * Storing a single book data
     * @param $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($book)
    {
        $book = Book::findOrFail($book);
        return $this->successResponse($book);
    }


    /**
     * @param Request $request
     * @param $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $book)
    {
        $rules = [
            'title'         =>  'max:255',
            'description'   =>  'min:1',
            'price'         =>  'min:1',
            'author_id'     =>  'min:1',
        ];
        $this->validate($request, $rules);
        $book = Book::findOrFail($book);
        $book->fill($request->all());
        if($book->isClean()){
            return $this->errorResponse("At least one value must change", Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $book->save();
        return $this->successResponse($book);
    }


    /**
     * Delete book information
     * @param $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($book)
    {
        $book = Book::findOrFail($book);
        $book->delete();
        return $this->successResponse($book);
    }
}

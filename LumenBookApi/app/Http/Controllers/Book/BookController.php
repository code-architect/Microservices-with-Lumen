<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Traits\ApiResponser;


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



    public function store()
    {
        $rules = [

        ];


    }


    /**
     * Show a specific book
     * @param Book $book
     * @return Response
     */
    public function show($book)
    {
        $book = Book::findOrFail($book);
        return $this->successResponse($book);
    }


    /**
     * Update book information
     * @param Request $request
     * @param $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $book)
    {
        $rules = [
            'name'      => 'max:254',
            'gender'    => 'max:20|in:male,female',
            'country'   => 'max:254',
        ];
        $this->validate($request, $rules);
        $book = Book::findOrFail($book);
        $book->fill($request->all());
        if($book->isClean()){
            return $this->errorResponse("Atleast one value must change", Response::HTTP_UNPROCESSABLE_ENTITY);
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

<?php

namespace App\Http\Controllers\Book;


use App\Http\Controllers\Controller;
use App\Services\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the books micro-service
     * @var BookService
     */
    public $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }


    /**
     * Get Book data
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->successResponse($this->bookService->obtainBooks());
    }


    /**
     * Save an book data
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        return $this->successResponse($this->bookService->createBook($request->all()));
    }


    /**
     * Show a single book details
     * @param $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($book)
    {
        return $this->successResponse($this->bookService->obtainBook($book));
    }


    /**
     * Update a single book data
     * @param Request $request
     * @param $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $book)
    {
        return $this->successResponse($this->bookService->editBook($request->all(),$book));
    }


    /**
     * Delete a single book details
     * @param $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($book)
    {
        return $this->successResponse($this->bookService->deleteBook($book));
    }

}

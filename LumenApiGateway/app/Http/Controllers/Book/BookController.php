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
     * The service to consume the authors micro-service
     * @var BookService
     */
    public $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }


    public function index()
    {

    }



    public function store(Request $request)
    {

    }



    public function show($book)
    {

    }



    public function update(Request $request, $book)
    {

    }



    public function destroy($book)
    {

    }
}

<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the authors micro-service
     * @var AuthorService
     */
    public $authorService;

    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index()
    {

    }



    public function store(Request $request)
    {

    }



    public function show($author)
    {

    }



    public function update(Request $request, $author)
    {

    }



    public function destroy($author)
    {

    }
}

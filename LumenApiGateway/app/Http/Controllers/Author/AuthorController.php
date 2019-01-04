<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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


    /**
     * Get Author data
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->successResponse($this->authorService->obtainAuthors());
    }


    /**
     * Save an author data
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        return $this->successResponse($this->authorService->createAuthor($request->all()));
    }


    /**
     * Show a single author details
     * @param $author
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($author)
    {
        return $this->successResponse($this->authorService->obtainAuthor($author));
    }


    /**
     * Update a single author data
     * @param Request $request
     * @param $author
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $author)
    {
        return $this->successResponse($this->authorService->editAuthor($request->all(),$author));
    }


    /**
     * Delete a single author details
     * @param $author
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($author)
    {
        return $this->successResponse($this->authorService->deleteAuthor($author));
    }
}

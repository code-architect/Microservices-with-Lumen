<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
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
 * Return full list of authors
 * @return Response
 */
    public function index()
    {

    }


    /**
     * Create one new authors
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

    }


    /**
     * Show a specific author
     * @param Author $author
     * @return Response
     */
    public function show(Author $author)
    {

    }


    /**
     * Update author information
     * @param Request $request
     * @param $author
     * @return Response
     */
    public function update(Request $request, $author)
    {

    }


    /**
     * Delete author information
     * @param $author
     * @return Response
     */
    public function destroy($author)
    {

    }
}

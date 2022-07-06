<?php

namespace App\Http\Controllers;

use App\Http\Request\BlogIndexRequest;
use App\Http\Response\BlogIndexResponse;
use App\Usecase\BlogIndexUsecase;


class BlogController extends Controller
{
    public function index(BlogIndexRequest $request,BlogIndexUsecase $usecase) {
        $usecase($request);
        $result = $usecase->index();

        return (new BlogIndexResponse())->toJson($result);
    }
}

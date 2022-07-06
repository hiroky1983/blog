<?php 
  
  namespace App\Usecase;

use Illuminate\Support\Facades\DB;

  class BlogIndexUsecase 
  {
    private $request;

    public function index() 
    {
        $blog = DB::select("
        SELECT
            b.id,
            b.title,
            b.content
        FROM
            blogs AS b
        ");
        return ['blog' => $blog];
    }
  }

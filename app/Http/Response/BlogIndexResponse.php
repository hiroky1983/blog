<?php 
  
  namespace App\Http\Response;

  class BlogIndexResponse
  {
    public function toJson($result)
    {
      return response()->json([
        'blog' => $result["blog"],
      ]);
    }
  }

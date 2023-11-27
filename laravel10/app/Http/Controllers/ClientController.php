<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    function getAllPost() :array
    {
      $response = Http::get('https://jsonplaceholder.typicode.com/posts');
      return $response->json();
    }

    function getPostById($id) :array
    {
      $response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
      return $response->json();
    }

    function addPost() :array
    {
      $post = Http::post('https://jsonplaceholder.typicode.com/posts',[
        'userId' => 1,
        'title' => 'New Post Title',
        'body' => 'New Post Description'  
      ]);
      return $post->json();
    }

    function updatePost() :array
    {
      $response = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
        'title' => 'Update Title',
        'body' => 'Update Description'
      ]);
      return $response->json();
    }

    function deletePost($id) :array
    {
      $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
      return $response->json();
    }
}

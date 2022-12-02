<?php
declare(strict_types=1);

namespace App\Http\Services;

class ApiService
{
    public static function getPosts(): array
    {
        $apiResponce = file_get_contents('https://gorest.co.in/public/v2/posts');
        $postsArray = json_decode($apiResponce, true);
        return $postsArray;
    }

    public static function getComments(): array
    {
        $apiResponce = file_get_contents('https://gorest.co.in/public/v2/comments');
        $commentsArray = json_decode($apiResponce, true);
        return $commentsArray;
    }
}

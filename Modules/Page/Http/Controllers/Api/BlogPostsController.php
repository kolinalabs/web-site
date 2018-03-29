<?php

namespace Modules\Page\Http\Controllers\Api;

use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Post;
use Modules\Blog\Repositories\Eloquent\EloquentPostRepository;
use Modules\Blog\Repositories\PostRepository;

class BlogPostsController extends Controller
{
    /**
     * @param int $amount
     * @return \Modules\Blog\Repositories\Collection
     */
    public static function getLatestBlogPosts($amount = 6)
    {
        /** @var PostRepository $postRepository */
        $post = new Post();
        $postRepository = new EloquentPostRepository($post);

        $latestPosts = $postRepository->latest($amount);

        return $latestPosts;
    }
}

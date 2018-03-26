<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Blog\Entities\Post;
use Modules\Blog\Repositories\PostRepository;
use Modules\Core\Http\Controllers\BasePublicController;

class PublicController extends BasePublicController
{
    /**
     * @var PostRepository
     */
    private $post;

    public function __construct(PostRepository $post)
    {
        parent::__construct();
        $this->post = $post;
    }

    public function index(Request $request)
    {
        $pagination = 6;

        $postManager = Post::query();

        // Posts com status publicado (published)
        $postManager->where('status', '=', 2);

        $posts = $postManager->paginate($pagination);

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = $this->post->findBySlug($slug);

        return view('blog.show', compact('post'));
    }
}

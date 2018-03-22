<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Support\Facades\App;
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

    public function index()
    {
        //$posts = $this->post->allTranslatedIn(App::getLocale())->forPage(1, 6);
        $posts = Post::paginate(6);

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = $this->post->findBySlug($slug);

        return view('blog.show', compact('post'));
    }
}

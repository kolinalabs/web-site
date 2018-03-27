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

        if ($categories = $request->get('category')) {
            $filterValues = explode(',', $categories);
            $postManager->whereIn('category_id', $filterValues);
        }
        if ($dateMin = $request->get('dateMin')) {
            if ($this->validateDate($dateMin, 'd-m-Y')) {
                $filterValue = date_create_from_format('d-m-Y', $dateMin);
                $postManager->whereDate('created_at', '>=', $filterValue);
            }
        }
        if ($dateMax = $request->get('dateMax')) {
            if ($this->validateDate($dateMax, 'd-m-Y')) {
                $filterValue = date_create_from_format('d-m-Y', $dateMax);
                $postManager->whereDate('created_at', '<=', $filterValue);
            }
        }

        $posts = $postManager->paginate($pagination);

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = $this->post->findBySlug($slug);

        return view('blog.show', compact('post'));
    }

    /**
     * @param $date
     * @param string $format
     * @return bool
     */
    private function validateDate($date, $format = 'Y-m-d H:i:s')
    {
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
}

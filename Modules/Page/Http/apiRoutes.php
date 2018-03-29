<?php

use Illuminate\Routing\Router;

/** @var Router $router */
$router->bind('page', function ($id) {
    return app(\Modules\Page\Repositories\PageRepository::class)->find($id);
});

$router->post('/contact', [
    'as' => 'contactForm',
    'uses' => 'FormController@contactForm'
]);

$router->post('/request', [
    'as' => 'requestForm',
    'uses' => 'FormController@requestForm'
]);

$router->get('/latest-blog-posts', [
    'as' => 'latestBlogPosts',
    'uses' => 'BlogPostsController@getLatestBlogPosts'
]);

$router->group(['prefix' => '/page', 'middleware' => ['api.token', 'auth.admin']], function (Router $router) {
    $router->get('pages', [
        'as' => 'api.page.page.index',
        'uses' => 'PageController@index',
        'middleware' => 'token-can:page.pages.index',
    ]);
    $router->get('pages-server-side', [
        'as' => 'api.page.page.indexServerSide',
        'uses' => 'PageController@indexServerSide',
        'middleware' => 'token-can:page.pages.index',
    ]);
    $router->get('mark-pages-status', [
        'as' => 'api.page.page.mark-status',
        'uses' => 'UpdatePageStatusController',
        'middleware' => 'token-can:page.pages.edit',
    ]);
    $router->delete('pages/{page}', [
        'as' => 'api.page.page.destroy',
        'uses' => 'PageController@destroy',
        'middleware' => 'token-can:page.pages.destroy',
    ]);
    $router->post('pages', [
        'as' => 'api.page.page.store',
        'uses' => 'PageController@store',
        'middleware' => 'token-can:page.pages.create',
    ]);
    $router->post('pages/{page}', [
        'as' => 'api.page.page.find',
        'uses' => 'PageController@find',
        'middleware' => 'token-can:page.pages.edit',
    ]);
    $router->post('pages/{page}/edit', [
        'as' => 'api.page.page.update',
        'uses' => 'PageController@update',
        'middleware' => 'token-can:page.pages.edit',
    ]);
    $router->get('templates', 'PageTemplatesController')->name('api.page.page-templates.index');
});

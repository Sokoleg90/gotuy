<?php

namespace App\Http\Controllers\Admin\En\Post;

use App\Http\Controllers\Controller;
use App\Service\En\PostService;


class BaseController extends Controller
{

    public $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

}

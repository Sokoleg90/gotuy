<?php

namespace App\Http\Controllers\Admin\Ru\Post;

use App\Http\Controllers\Controller;
use App\Service\Ru\PostService;


class BaseController extends Controller
{

    public $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

}

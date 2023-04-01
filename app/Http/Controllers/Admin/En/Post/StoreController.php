<?php

namespace App\Http\Controllers\Admin\En\Post;

use App\Http\Requests\Admin\Post\StoreRequest;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->Store($data);

        return redirect()->route('admin.en.post.index');
    }
}

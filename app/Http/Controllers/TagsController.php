<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\tagRequest;
use App\Services\TagServices;

class TagsController extends Controller
{
    public function index() {
        return view('tags.tags');
    }

    public function store(tagRequest $tagRequest , TagServices $tagServices) {
        $data = [
            'name' => $tagRequest->tag_name,
            'user_id' => auth()->user()->id
        ];

        $tagServices->createTag($data);

        return redirect()->back();
    }

    public function destroy(Request $request , TagServices $tagServices) {
        if($request->tag_id) {
            $tagServices->deleteTag($request->tag_id);
            return redirect()->back();
        }
        return redirect()->back();
    }
}

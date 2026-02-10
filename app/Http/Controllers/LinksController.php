<?php

namespace App\Http\Controllers;

use App\Models\Links;
use Illuminate\Http\Request;
use App\Http\Requests\linkRequest;
use App\Services\LinksServices;

class LinksController extends Controller
{
    public function index(Request $request, LinksServices $linkServices){
        $links = $linkServices->getUserLinksFiltered(
            $request->search,
            $request->category,
            $request->tag
        );

        return view('link.links', compact('links'));
    }

    public function store(linkRequest $linkRequest , LinksServices $linksServices) {
        $data = [
            'title' => $linkRequest->link_title,
            'url' => $linkRequest->link_url,
            'categories_id' => $linkRequest->category_id,
            'user_id' => auth()->user()->id
        ];

        $link = $linksServices->createLink($data);

        if ($linkRequest->filled('link_tag')) {
            $link->tags()->attach($linkRequest->link_tag);
        }

        return redirect()->back();
    }

    public function update(linkRequest $linkRequest , LinksServices $linksServices , Links $links) {
        $this->authorize('update' , $links);

        $data = [
            'title' => $linkRequest->link_title,
            'url' => $linkRequest->g,
            'categories_id' => $linkRequest->category_id
        ];

        $linksServices->updateLink($linkRequest->link_id , $data);

        return redirect()->back();
    }

    public function destroy(Request $request , LinksServices $linksServices , Links $links) {
        if($request->link_id) {
            $this->authorize('delete' , $links);
            $linksServices->deleteLink($request->link_id);
            return redirect()->back();
        }

        return redirect()->back();
    }

    public function showSharedLinks() {
        return view('link.sharedLink');
    }
}

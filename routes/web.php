<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use shweshi\OpenGraph\OpenGraph;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{post}', function (\App\Models\Post $post) {
    return view('post', ['post' => $post]);
})->name('posts.show');

Route::get('/editorjs-link-tool-parser', function (Request $request) {
    $validated = $request->validate([
        'url' => ['required', 'url'],
    ]);

    $url = $validated['url'];

    try {
        $og = new OpenGraph();

        // Fetch and parse
        $data = $og->fetch($url);

        return response()->json([
            'success' => 1,
            'link'    => $url,
            'meta'    => [
                'title'       => data_get($data, 'title'),
                'site_name'   => data_get($data, 'site_name'),
                'description' => data_get($data, 'description'),
                'image'       => [
                    'url' => data_get($data, 'image'),
                ],
            ],
        ]);
    } catch (\Throwable $e) {
        // \Log::warning('Link preview failed', ['url' => $url, 'error' => $e->getMessage()]);
        return response()->json(['success' => 0]);
    }
})->name('editorjs.link-tool-parser');

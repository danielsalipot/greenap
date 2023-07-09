<?php

namespace App\Http\Controllers;

use App\Helper\FileUploadHelper;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\PostAsset;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Session;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::with('assets')
            ->where('status', 0)
            ->orderBy('updated_at', 'desc')
            ->paginate(20);
        $stat = 0;
        return view(
            'admin.post.index',
            [
                'stat' => $stat,
                'posts' => $posts,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $request->validated();
        DB::beginTransaction();
        try {
            $post = Post::create($request->only('user_id', 'title', 'description', 'body'));
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $filePath = (new FileUploadHelper)->uploadImageToStorage($image, "/posts/post_$post->id");
                    PostAsset::create([
                        'post_id' => $post->id,
                        'link' => $filePath
                    ]);
                }
            }
            DB::commit();
            Session::flash('message', 'Post Successfuly Added to Drafts');
            return redirect('/admin/post');
        } catch (\Throwable $th) {
            DB::rollback();
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::with('assets', 'users')->find($id);

        return view('show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $request->validated();
        DB::beginTransaction();
        try {
            $post->update([
                'title' => $request->title,
                'description' => $request->description,
                'body' => $request->body,
                'status' => $request->status ?? 0,
                'visibility' => $request->visibility ?? 0,
                'featured' => $request->featured ?? 0,
                'revisions' => $post->revisions + 1,
            ]);

            if ($request->hasFile('images')) {
                foreach ($post->assets as $key => $asset) {
                    if (!Str::contains($asset->link, 'samples/post')) {
                        unlink($asset->link);
                    }
                    PostAsset::find($asset->id)->delete();
                }

                foreach ($request->file('images') as $image) {
                    $filePath = (new FileUploadHelper)->uploadImageToStorage($image, "/posts/post_$post->id");
                    PostAsset::create([
                        'post_id' => $post->id,
                        'link' => $filePath
                    ]);
                }
            }

            DB::commit();
            Session::flash('message', 'Successfully Updated');
            return back();
        } catch (\Throwable $th) {
            dd($th);

            DB::rollback();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        DB::beginTransaction();
        try {
            File::deleteDirectory("storage/posts/post_$post->id");
            $post->delete();
            DB::commit();

            Session::flash('message', 'Post Deleted');
            return redirect('/admin/post');
        } catch (\Throwable $th) {
            DB::rollback();

            throw $th;
        }
    }

    public function posted()
    {

        $posts = Post::with('assets')
            ->where('status', 1)
            ->orderBy('updated_at', 'desc')
            ->orderBy('featured', 'desc')
            ->orderBy('visibility', 'desc')
            ->paginate(20);
        $stat = 1;
        return view(
            'admin.post.index',
            [
                'stat' => $stat,
                'posts' => $posts,
            ]
        );
    }
}

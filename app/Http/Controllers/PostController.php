<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\comment;
use App\Models\like;
use App\Models\User;
use App\Models\friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\validators;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $followCount = friend::join('users', 'users.id', '=', 'friends.requester')->where('status', '=', 1)->where('friends.user_requested', '=', auth()->user()->id)->get('users.*', 'friends.*');
        $user_id = Auth::user()->id;
        $fn_post = Post::join('friends', 'friends.requester', '=', 'posts.user_id')->where('status', '=', 1)->where('post_status', '=', 2)->where('friends.requester', '=', auth()->user()->id)->get('friends.*');

        // $post="select * from `friends` where `friends`.`requester` = 1 and `status` = 1 and `friends`.`requester`";
        //  DB::enableQueryLog();
        $posts = Post::with('like', 'comment.user', 'user', 'friend')->where('post_status', '=', 2)->orderByDesc('created_at')->get();
        // $post = User::with('suggest')->get();
        // // dd(DB::getQueryLog());
        // // exit;
        $post = Post::where('post_status', '=', 0)->where('id', '=', auth()->user()->id)->get();

        //      $comment = User::join('posts','posts.user_id','=','users.id')->join('friends','friends.requester','=','posts.user_id')->where('post_status', '=',1)->where('status','=', 1)->get(['posts.*','users.*','friends.*']);
        //     $comments = comment::latest()->get();

        //    $posts = User::leftjoin('posts','posts.user_id','=','users.id')->where('posts.user_id', '=', auth()->user()->id)->get();
        // $data = Product::join('categories','categories.id','=','category_id')->get(['products.*','categories.cname']);
        //    $data = Post::latest()->get();
        // $users = User::where('id', '!=', auth()->id())->get();
        $data = friend::all();
        if (!$data) {
            $user = User::where('type', '=', 1)->where('id', '!=', auth()->id())->get();
            // $user = friend::join('users', 'users.id', '!=', 'friends.requester')->where('status', '=', 0)->where('users.type', '=', 1)->where('users.id', '!=', auth()->id())->get(['users.*']);
            // exit();
        } else {

            // $user = friend::leftjoin('users', 'users.id', '=', 'friends.requester')->where('status', '=', 0)->where('users.type', '=', 1)->where('users.id', '=', auth()->id())->get(['users.*']);
            $user = DB::table('users')
                ->leftJoin('friends', 'friends.requester', 'users.id')
                ->where('users.id', '!=', auth()->user()->id)
                ->where('users.type', '=', 1)
                ->where(function ($query) {
                    return $query->orWhere('friends.requester', auth()->user()->id)
                        ->orWhereNull('friends.status', 0);
                    // ->orWhereNull('friends.requester');
                })
                ->select('users.id', 'users.name', 'users.image', 'friends.status')
                ->get();
            // exit();
        }
        $friend_req = friend::join('users', 'users.id', '=', 'friends.requester')->where('status', '=', 1)->where('friends.user_requested', '=', auth()->user()->id)->get(['friends.id as fid', 'friends.created_at as ftime', 'users.*']);
        $friend_accept = friend::join('users', 'users.id', '=', 'friends.user_requested')->where('status', '=', 1)->where('friends.requester', '=', auth()->user()->id)->get(['friends.id as fid', 'friends.created_at as ftime', 'users.*']);

        return view('post.index', compact('posts', 'user', 'friend_req', 'friend_accept'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'image_post' => 'required | image |max:20048',
        ]);
        $imageName = time() . '.' . $request->image_post->extension();
        $request->image_post->move(public_path('image'), $imageName);
        $user = $request->all();
        $user['image_post'] = $imageName;
        Post::create($user);
        return redirect()->route('post.index')->with('success', 'Your Post successfully created.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('post.show', compact('comment', 'data1', 'user', 'like'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('success', 'Your Post deleted successfully');
    }

    public function search(Request $request)
    {
        $name = $request->get('search');
        $searchname = User::Where('name', 'like', '%' . $name . '%')->get();

        return view('post.search')->with('searchname', $searchname);
    }
    //comment

    public function store_comment(Request $request)
    {
        $request->validate([
            'post_id' => 'required',
            'user_id' => 'required',
            'body_cmt' => 'required',
        ]);
        $comment = $request->all();
        $data = comment::create($comment);
        return redirect()->route('post.index');
    }
    public function like(Request $request, Like $likes)
    {
        $postid = $request->post_id;
        $likecheck = like::where(['user_id' => Auth::id(), 'post_id' => $postid])->first();
        if ($likecheck) {
            like::where(['user_id' => Auth::id(), 'post_id' => $postid])->delete();
            return redirect()->route('post.index');
        } else {
            $like = new like;
            $like->user_id = Auth::id();
            $like->post_id = $postid;
            $like->save();
            return redirect()->route('post.index');
        }
    }
    public function postshow()
    {
        $posts = Post::with('comment.user', 'user', 'like', 'friend')->where('post_status', '=', 1)->orderByDesc('created_at')->get();
        $rejected = Post::with('comment.user', 'user', 'like', 'friend')->where('post_status', '=', 3)->orderByDesc('created_at')->get();

        return view('post.show', compact('posts', 'rejected'));
    }
    public function accept($id)
    {
        $res = Post::find($id)->update(['post_status' => 2]);
        return redirect()->back()->with('success', 'Accept post Request Successfully.');
    }
    public function postreject(Post $post, $id)
    {
        $res = Post::find($id)->update(['post_status' => 3]);
        return redirect()->back()->with('success', 'post Request reject Successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\comment;
use App\Models\like;
use App\Models\User;
use App\Models\friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, User $user)
    {
        $data = User::latest()->paginate(4);
        return view('admin.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
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
            'name' => 'required',
            'contect' => 'required',
            'email' => 'required',
            'image' => 'required | image |max:20048',
            'gender' => 'required',
            'password' => 'required',
        ]);

        // $user['password'] = bcrypt($request->password);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('profile'), $imageName);
        // $user = $request->all();
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->contect = $request->contect;
        $user->password = Hash::make($request->password);
        $user['image'] = $imageName;
        $user->save();
      
      
        // auth()->loginUsingId($user->id);
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = User::latest();
        return view('admin.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (!empty($request->image)) {

            // unlink(public_path('profile'.$user->image));
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('profile'), $imageName);
            $user->name = $request->name;
            $user->contect = $request->contect;
            $user->email = $request->email;
            $user['image'] = $imageName;
            $user->gender = $request->gender;
            $user->password = $request->password;
            $user->update();

            return redirect('post')->with('success', 'Youre Profile Upadte With Image successfully.');
        } else {
            $user->name = $request->name;
            $user->contect = $request->contect;
            $user->email = $request->email;
            $user->gender = $request->gender;
            $user->password = $request->password;
            $user->update();

            return redirect('post')->with('success', 'Your Profile Upadte successfully.');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editprofile()
    {
        $id = Auth::user()->id;
        $data1 = User::leftjoin('posts', 'posts.user_id', '=', 'users.id')->where('post_status', '=', 2)->where('posts.user_id', '=', auth()->user()->id)->get();
        $postCount = User::leftjoin('posts', 'posts.user_id', '=', 'users.id')->where('posts.user_id', '=', auth()->user()->id)->count();
        $followingCount = friend::join('users', 'users.id', '=', 'friends.requester')->where('status', '=', 1)->where('friends.user_requested', '=', auth()->user()->id)->get(['friends.id as fid', 'friends.created_at as ftime', 'users.*'])->count();
        $followCount = friend::join('users', 'users.id', '=', 'friends.requester')->where('status', '=', 1)->where('friends.requester', '=', auth()->user()->id)->get(['friends.id as fid', 'friends.created_at as ftime', 'users.*'])->count();
        $pending =  User::leftjoin('posts', 'posts.user_id', '=', 'users.id')->where('post_status', '=', 1)->where('posts.user_id', '=', auth()->user()->id)->get();

        // echo $data1;
        // exit;
        $comment = Post::join('users', 'users.id', '=', 'posts.user_id')->join('comments', 'comments.post_id', '=', 'posts.id')->get();
        $like = Post::join('likes', 'likes.post_id', '=', 'posts.id')->get();
        $user = User::latest()->get();
        return view('admin.editprofile', compact('data1', 'postCount', 'comment', 'like', 'user', 'followingCount', 'followCount','pending'));
    }
}

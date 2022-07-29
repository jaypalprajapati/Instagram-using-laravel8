<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FriendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function sendRequest(Request $request, $id)
    {
        $user = auth()->user();
        $data = [
            'requester' => $user->id,
            'user_requested' => $id,
        ];
        Friend::create($data);
        return back()->with('success', 'Send Request Successfully.');
    }
    public function Friend_requests()
    {
        $uid = auth()->user()->id;
        $friend = friend::where('friends.user_requested', '=', auth()->user()->name)->get();
        // DB::enableQueryLog();
        $friend_req = friend::join('users', 'users.id', '=', 'friends.requester')->where('status', '=', 0)->where('friends.user_requested', '=', auth()->user()->id)->get(['friends.id as fid', 'friends.created_at as ftime', 'users.*']);

        // dd(DB::getQueryLog());      
        return view('friend.show', compact('friend_req'));
    }
    public function dltfrd(friend $friend, $id)
    {
        $res = friend::find($id)->delete();
        return redirect()->back()->with('success', 'Request Delete Successfully.');
    }
    public function accept($id)
    {

        $uid = Auth::user()->id;
        $checkRequest = DB::table('friends')
            ->where('id', $id)
            ->update(['status' => 1]);
        // dd($checkRequest);
        //         $checkRequest = friend::where('requester','=', $id)
        //             ->where('user_requested','=', $uid)
        //             ->get();
        // dd($checkRequest);
        //         if ($checkRequest) {
        //             // echo "yes, update here";
        //             $updateFriendship = DB::table('friends')
        //                 ->where('user_requested', $uid)
        //                 ->where('requester', $id)
        //                 ->update(['status' => 1]);
        //         }
        //         die("sd");
        return redirect()->back()->with('success', 'Accept Friend Request Successfully.');
    }

    public function removefriend(friend $friend, $id)
    {
        $res = friend::find($id)->delete();

        return redirect()->back()->with('success', 'Delete Request Successfully.');
    }
    public function showFriends($id)
    {
        $user = User::find($id);
        return view('friend.show', compact('user'));
    }
}

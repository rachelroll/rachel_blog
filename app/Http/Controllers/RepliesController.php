<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReplyRequest;
use App\Models\Reply;
use Illuminate\Http\Request;

class RepliesController extends Controller
{

    public function __construct()
    {

    }

    public function store(ReplyRequest $request, Reply $reply)
    {
        $reply->content = $request->content;
        $reply->user_id = \Auth::id();
        $reply->post_id = $request->post_id;
        $reply->save();

        return redirect()->to($reply->post->link())->with('sucess', '回复发布成功');
    }

    public function destroy(Reply $reply)
    {
        $this->authorize('destroy', $reply);
        $reply->delete();

        return redirect()->to($reply->post->link())->with('sucess', '删除回复成功');
    }
}

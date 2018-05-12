<?php

namespace App\Observers;

use App\Handlers\SlugTranslateHandler;
use App\Jobs\TranslateSlug;
use App\Models\Post;
use App\Models\Reply;
use App\Notifications\PostReplied;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{
    public function creating(Reply $reply)
    {
        $reply->content = clean($reply->content, 'user_post_body');
    }

    public function updating()
    {
        //
    }

    public function saving()
    {
        //
    }

    public function created(Reply $reply)
    {
        $reply->post->increment('reply_count', 1);
        $post = $reply->post;

        if(! $reply->user->isAuthorOf($post)) {
            $post->user->notify(new PostReplied($reply));
        }
    }

    public function deleted(Reply $reply)
    {
        $reply->post->decrement('reply_count', 1);
    }
}
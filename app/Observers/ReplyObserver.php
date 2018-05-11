<?php

namespace App\Observers;

use App\Handlers\SlugTranslateHandler;
use App\Jobs\TranslateSlug;
use App\Models\Post;
use App\Models\Reply;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{
    public function creating()
    {
        //
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
    }

    public function deleted(Reply $reply)
    {
        $reply->post->decrement('reply_count', 1);
    }
}
<?php

namespace App\Observers;

use App\Handlers\SlugTranslateHandler;
use App\Jobs\TranslateSlug;
use App\Models\Post;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class PostObserver
{
    public function creating(Post $post)
    {
        //
    }

    public function updating(Post $post)
    {
        //
    }

    public function saving(Post $post)
    {
        // XSS 过滤
        $post->body = clean($post->body, 'user_post_body');

        // 生成文章摘要
        $post->excerpt = make_excerpt($post->body);


    }

    public function saved(Post $post)
    {
        // 如果 slug 字段无内容, 即使用翻译器对 title 字段进行翻译
        if(! $post->slug) {
            dispatch(new TranslateSlug($post));
        }
    }

    public function deleted(Post $post)
    {
        \DB::table('replies')->where('post_id', $post->id)->delete();
    }
}









 
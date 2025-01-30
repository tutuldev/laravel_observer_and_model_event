<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Str;


class PostObserver
{
    /**
     * Handle the Post "created" event.
     */
    public function retrieved(Post $post): void
    {
        $post->increment('counter');
    }
    public function created(Post $post): void
    {
        //
    }
    public function saving(Post $post): void
    {
        $post->slug =Str::slug($post->title,"-");
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     */
    public function restored(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     */
    public function forceDeleted(Post $post): void
    {
        //
    }
}

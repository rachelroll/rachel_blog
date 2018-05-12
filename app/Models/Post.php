<?php

namespace App\Models;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'category_id', 'excerpt', 'slug', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function reply()
    {
        return $this->hasMany(Reply::class);
    }

    public function scopeGuolv($query)
    {
        return $query->where('id','>=',2)->where('user_id','<',6)->where('category_id','=',7);
    }


    public function scopeWithOrder($query, $order)
    {
        // 不同的排序, 使用不同的数据读取逻辑
        switch ($order) {
            case 'recent':
                $query = $this->recent();
                break;

            default:
                $query = $this->recentReplied();
                break;
        }

        return $query->with('user', 'category');
    }

    public function scopeRecentReplied($query)
    {

        return $query->orderBy('updated_at', 'desc');
    }

    public function scopeRecent($query)
    {
        // 按照创建时间排序
        return $query->orderBy('created_at', 'desc');
    }

    public function link($params = [])
    {
        return route('posts.show', array_merge([$this->id, $this->slug], $params));
    }
}
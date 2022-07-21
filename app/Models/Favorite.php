<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //テーブル名
    protected $table = 'favorites';

    //可変項目
    protected $fillable =
    [
        'title',
        'contents',
    ];

    /**
     * リレーション (従属)
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() // 単数形
    {
        // return $this->belongsTo('App\User');
    }

}

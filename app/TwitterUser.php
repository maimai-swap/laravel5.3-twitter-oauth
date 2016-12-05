<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TwitterUser extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['twitter_user_id','email','name',
        'nickname','avatar','token','token_secret',];

    /**
     * Get the user that owns the twitter user.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReadDiscussion extends Model
{
    protected $table = 'user_read_discussion';

    protected $rules = [
  'user_id'       => 'required|exists:users,id',
  'discussion_id' => 'required|exists:discussions,id',
];

    protected $fillable = ['user_id', 'discussion_id'];

    public $timestamps = false;

    protected $dates = ['read_at'];
}

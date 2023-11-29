<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected  $table = 'chat';
    public function sender ()
    {
        return $this->hasOne( User::class, "id", "from_id" );
    }

    public function receiver ()
    {
        return $this->hasOne( User::class, "id", "to_id" );
    }
}

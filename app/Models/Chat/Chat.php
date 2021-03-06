<?php

namespace App\Models\Chat;

use App\Models\Chat\Conversation;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = ['message', 'sender_id', 'file','sender','conversation_id'];
    
    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
}

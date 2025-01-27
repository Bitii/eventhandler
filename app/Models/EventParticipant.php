<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EventParticipant extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'event_id',
    ];

    /**
     * Get the user for the participant.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the event for the participant.
     */
    public function event(){
        return $this->belongsTo(Event::class);
    }
}

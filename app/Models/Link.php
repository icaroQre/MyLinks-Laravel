<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'position',
        'user_id',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Move the link up or down
     * @param int $to +1 to move down, -1 to move up
     * @return void
     */

    private function move($to){

        $currentPosition = $this->position;

        $swapWith = Link::wherePosition($currentPosition+$to)
            ->first();

        $this->position = $swapWith->position;
        $swapWith->position = $currentPosition;
        $this->save();
        $swapWith->save();

        return redirect()->route('dashboard');
    }
    
    public function moveUp(){
        $this->move(-1);
    }
    public function moveDown(){
        $this->move(+1);
    }
}

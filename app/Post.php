<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    protected $guarded = [];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}

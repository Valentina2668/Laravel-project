<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','content', 'picture', 'user_id']; //permition to addition to Filament inputs

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

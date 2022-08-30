<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $guarded = [];

    protected $with = ['user'];
    public function user()  
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, fn($query, $search)=>
         $query
                ->where('title', 'like', '%'. $search . '%')
                ->orWhere('content', 'like', '%'. $search . '%'));
    }

}

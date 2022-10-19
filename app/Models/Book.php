<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    use HasFactory;
    // public $timestamps = false;
    // protected $fillable = [
    //     'title',
    //     'description',
    //     'author_id',
    //     'country',
    //     'language',
    //     'image',
    //     'pages',
    //     'year'
    // ];
    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%');
}

    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
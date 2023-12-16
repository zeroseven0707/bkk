<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;
     
    // protected $fillable =['title','excerpt','body'];
    protected $guarded =['id'];
    protected $with = ['author'];

    Public function scopeFilter($query,array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
        return $query->where('title', 'like', '%' .$search. '%')
                     ->orWhere('body','like', '%' .$search. '%');

        });
        
        $query->when($filters['author']?? false, fn($query, $author) =>
        $query->whereHas('author', fn($query)=>
                $query->where('username', $author)
        
                )
        );

    }
     

    public function author()
    {
            return $this->belongsTo(User::class,'user_id');
            
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
}

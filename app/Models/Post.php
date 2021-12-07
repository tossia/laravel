<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use function request;

class Post extends Model {

    use HasFactory;

    protected $guarded;
//To minimize nb of queries
    protected $with = ['category', 'author'];
//Aloid to fullfil
    protected $fillable = ['title', 'excerpt', 'body', 'category_id', 'slug'];

//Ignore these for auto-increment value, use previous or this one
//protected $guarded = ['id'];
//Option to create slug in URL
//Auto generate slug. In this case I don't need to put "slug"
// into Post Modele
    /*
     * public function getRouteKeyName() {
     * return parent::getRouteKeyName(); 
     * or 
     * return 'slug';
     * 
     */

    public function scopeFilter($query, array $filters) {

        $query->when($filters['search'] ?? false, function ($query, $search) {

            $query
                    ->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {

            $query->whereHas('category', fn($query) =>
                    $query->where('slug', $category));
        });
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public
            function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

}

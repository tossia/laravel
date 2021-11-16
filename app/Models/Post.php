<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    use HasFactory;

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
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}

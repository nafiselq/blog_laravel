<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use SoftDeletes;
    public function category(){
        return $this->belongsTo(Category::class);
    }

    protected $fillable = ['judul','category_id','content','gambar','slug','users_id'];
    use HasFactory;
    protected $table = 'posts';

    public function tags(){
        return $this->belongsToMany(Tags::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}

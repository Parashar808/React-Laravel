<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRUD extends Model
{
    use HasFactory;

    protected $fillable =  [
        'title',
        'description',
        'author',
        'category'
        
        // 'image_path'
    
    ];
    public function cat(){
        return $this->belongsTo(Category::class);
    }
}

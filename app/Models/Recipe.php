<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'name',
        'comment',
        'process'
        ];
    

    
    public function getPaginateByLimit(int $limit_count = 3)
    {
        return $this->orderby('updated_at','DESC')->paginate($limit_count);
    }
    
    
    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }
}

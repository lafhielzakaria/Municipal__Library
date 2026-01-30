<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Book extends Model
{
    //
    protected $fillable = [
      'author',
      'title',
      'category_id',
    ];
    public function Category(){
     return $this->hasMany (category::class);
    }
}
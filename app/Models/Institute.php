<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;
     
    protected $table = 'institutes';

    protected $primaryKey = 'inst_id';
  
    protected $guarded  = ['inst_id'];

    public function users()
    {
        return $this->hasMany(User::class, 'inst_id', 'inst_id');
    }

}

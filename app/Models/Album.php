<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use OwenIt\Auditing\Contracts\Auditable;

class Album extends Model implements Auditable
{
    use HasFactory;
    
    use \OwenIt\Auditing\Auditable;

    protected $table = 'albuns';

    public function autor(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}

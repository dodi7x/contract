<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    /**
     * The roles thahe Document
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Mode_contract()
    {
        return $this->belongsToMany('documents_id');
    }
    
}

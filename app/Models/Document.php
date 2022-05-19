<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $guarded = [];
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
    /**
     * Get all of the comments for the Document
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function document_fields()
    {
        return $this->hasMany(document_fields::class);
    }
}

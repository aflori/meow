<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Meow extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable
     *
     */
    protected $fillable = [
        'content',
        'creation_date',
        'modification_date',
        'user_id'
    ];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'modification_date';

    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}

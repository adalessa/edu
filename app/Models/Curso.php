<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'profesor_id'];

    /**
     * @return BelongsTo<User, Curso>
     */
    public function profesor(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsToMany<User>
     */
    public function alumnos(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'alumno_curso', 'curso_id', 'alumno_id');
    }
}

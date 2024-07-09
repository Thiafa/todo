<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['tarefa', 'data_termino', 'status', 'user_id'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $casts = [
        'status' => StatusEnum::class
    ];
}

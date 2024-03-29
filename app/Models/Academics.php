<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academics extends Model
{
    protected $fillable = ["course","year"];
    use HasFactory;

    public function students() {
        return $this->belongsTo(Student::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'title',
        'subtitle',
        'image',
        'body'
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

}

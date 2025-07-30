<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    // Job table is already created by default Application Table , so, may be conflict.
    protected $table = 'job_listings';

    protected $fillable = ['title', 'description'];

}

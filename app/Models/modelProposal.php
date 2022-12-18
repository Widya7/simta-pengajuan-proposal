<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelProposal extends Model
{
    use HasFactory;

    protected $table = 'proposal';
    protected $fillable = ['', 'nama','nrp','judul','lb','file','',''];

}

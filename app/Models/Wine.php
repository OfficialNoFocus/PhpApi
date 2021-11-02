<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam',
        'prijs',
        'regio',
        'beschrijving',
        'wijngebied',
        'wijnhuis',
        'druivensoort',
        'categorie',
        'inhoud',
        'serveren_op',
        'ook_lekker_bij'
    ];
}

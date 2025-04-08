<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Pagamento;

class User extends Authenticatable
{

    use HasFactory;

    protected $fillable = [
        'nome',
        'data_nascimento',
        'email',
        'password',
    ];

    protected $hidden = [
        'password'
    ];

    protected function casts(): array
    {
        return [
            'data_nascimento' => 'date',
            'password' => 'hashed'
        ];
    }

    public function pagamentos()
    {
        return $this->hasMany(Pagamento::class);
    }
}
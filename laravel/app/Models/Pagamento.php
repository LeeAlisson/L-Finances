<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parcelas()
    {
        return $this->hasMany(Parcela::class);
    }

    protected $table = 'pagamento';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'descricao',
        'valor',
        'data_pagamento',
        'user_id'
    ];
    protected function casts()
    {
        return [
            'valor' => 'decimal:2',
            'data_pagamento' => 'date'
        ];
    }
}
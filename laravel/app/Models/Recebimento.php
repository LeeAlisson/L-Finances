<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pagamento;
use App\Models\Parcela;

class Recebimento extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parcelas()
    {
        return $this->morphMany(Parcela::class, 'parcelavel');
    }

    protected $table = 'recebimento';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'descricao',
        'valor',
        'data_recebimento',
        'user_id'
    ];

    protected function casts()
    {
        return [
            'valor' => 'decimal:2',
            'data_recebimento' => 'date'
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pagamento;
use App\Models\Recebimento;

class Parcela extends Model
{
    public function pagamento()
    {
        return $this->belongsTo(Pagamento::class);
    }

    public function recebimento()
    {
        return $this->belongsTo(Recebimento::class);
    }

    public function parcelavel()
    {
        return $this->morphTo();
    }

    protected $table = 'parcelas';
    protected $primaryKey = 'id';
}
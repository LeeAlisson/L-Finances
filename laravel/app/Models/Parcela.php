<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parcela extends Model
{
    public function pagamento()
    {
        return $this->belongsTo(Pagamento::class);
    }

    
}

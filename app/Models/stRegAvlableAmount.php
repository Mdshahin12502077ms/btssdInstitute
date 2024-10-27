<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stRegAvlableAmount extends Model
{
    use HasFactory;

    public function StRegistrationFund(){

        return $this->belongsTo(StRegistrationFund::class,'amountfund_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Work extends Model
{
    use HasFactory;

    protected $table = "works";

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customers_id', 'id');
    }

    public function totalPrice()
    {
        $totalPrice = $this->pices * $this->value;

        return $this->formateMoney($totalPrice);
    }

    public function price()
    {
        return $this->formateMoney($this->value);
    }

    private function formateMoney(float $number): string
    {
        return 'R$ ' . number_format($number, 2, ',', '.');
    }
}

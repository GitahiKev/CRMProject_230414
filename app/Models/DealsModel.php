<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealsModel extends Model
{
    use HasFactory;

    public function deals() {
        return " Find good deals here";
    }
}

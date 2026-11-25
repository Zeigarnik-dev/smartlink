<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Override;

class Link extends Model
{
    protected $guarded = [];

    #[Override]
    protected function casts()
    {
        return [
            'clicks' => 'int',
        ];
    }
}

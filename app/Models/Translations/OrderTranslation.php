<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;
use App\Models\Order;

class OrderTranslation extends Model
{
    protected $baseModuleModel = Order::class;
}

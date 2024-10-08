<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;
use App\Models\Client;

class ClientTranslation extends Model
{
    protected $baseModuleModel = Client::class;
}

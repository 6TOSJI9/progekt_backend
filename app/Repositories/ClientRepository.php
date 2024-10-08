<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\Behaviors\HandleNesting;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Client;

class ClientRepository extends ModuleRepository
{
    use HandleBlocks, HandleTranslations, HandleSlugs, HandleMedias, HandleFiles, HandleRevisions, HandleNesting;

    public function __construct(Client $model)
    {
        $this->model = $model;
    }
}

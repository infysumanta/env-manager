<?php

namespace Sumantablog\EnvManager;

use Sumantablog\Admin\Extension;

class EnvManager extends Extension
{
    public $name = 'env-manager';

    public $menu = [
        'title' => 'EnvManager',
        'path'  => 'env-manager',
        'icon'  => 'fa-gears',
    ];
}
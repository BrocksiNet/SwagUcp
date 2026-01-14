<?php

declare(strict_types=1);

namespace SwagUcp;

use Shopware\Core\Framework\Plugin;

class SwagUcp extends Plugin
{
    public function executeComposerCommands(): bool
    {
        return true;
    }
}

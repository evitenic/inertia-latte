<?php

namespace Evitenic\InertiaLatte\Commands;

use Illuminate\Console\Command;

class InertiaLatteCommand extends Command
{
    public $signature = 'inertia-latte';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

<?php

namespace AbdelhamidErrahmouni\LaravelABTesting\Commands;

use Illuminate\Console\Command;

class LaravelABTestingCommand extends Command
{
    public $signature = 'make:ab-test-goal';

    public $description = 'Create a new AB test goal';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

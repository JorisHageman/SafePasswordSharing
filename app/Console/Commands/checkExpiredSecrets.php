<?php

namespace App\Console\Commands;

use App\Models\Secret;
use Illuminate\Console\Command;

class checkExpiredSecrets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-expired-secrets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $secrets = Secret::all();
        foreach ($secrets as $secret) {
            if ($secret->created_at->addHours($secret->time_valid)->isPast()) {
                $secret->delete();
            }
        }
    }
}

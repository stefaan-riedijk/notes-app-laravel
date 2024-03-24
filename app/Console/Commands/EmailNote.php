<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PharIo\Manifest\Email;

class EmailNote extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:email-note';

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
    }
}

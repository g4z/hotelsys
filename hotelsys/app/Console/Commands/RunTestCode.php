<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunTestCode extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hotelsys:run-test-code';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run some testing code';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $reservation = \App\Reservation::find(2);
        
        $x = $reservation->room->hotel->toArray();
        dd($x);

        // dd($hotel->rooms->toArray());   
    }
}

<?php

namespace App\Console\Commands;

use Database\Seeders\CitySeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\StateSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CountrySeedCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:country-seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Country Seeder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting the Country, State, and City seeders...');

        // Country Seeder
        Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\CountrySeeder']);
        $this->info('CountrySeeder has been executed.');

        // State Seeder
        Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\StateSeeder']);
        $this->info('StateSeeder has been executed.');

        // City Seeder
        Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\CitySeeder']);
        $this->info('CitySeeder has been executed.');

        $this->info('All seeders have been executed successfully!');
    }
}

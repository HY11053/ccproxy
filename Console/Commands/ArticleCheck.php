<?php

namespace App\Console\Commands;

use App\AdminModel\Archive;
use App\AdminModel\Brandarticle;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Log;
class ArticleCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'article:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Article Check Command';

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

    }


}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdatePostViews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-post-views';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Redis -> MySQL view_count 更新阅读量';

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
        $redis = app()->get('redis');
        $redis->pconnect('127.0.0.1', '6379');
        $redis->auth(config('database.redis.default.password'));
        if ($redis->isConnected()) {
            $view_counts = $redis->zRange('view_count', 0, -1, true);
            if ($view_counts) {
                foreach ($view_counts as $key => $val) {
                    $id = mb_substr($key, 8); // 截取 "article:" 之后的 id
                    $article = DB::table('articles')->where('id', $id)->first();
                    $this->info($id);
                    $count = $article->clicks + $val;
                    DB::table('articles')
                        ->where('id', $id)
                        ->update([
                            'clicks' => $count,
                        ]);
                }
                $this->info($redis->del('view_count'));
            }
        }

        return ;
    }
}

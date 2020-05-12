@servers(['web' => ['zqf@117.50.90.220']])

@task('deploy', ['on' => 'web', 'confirm' => true])
    cd /home/zqf/Code/my-blog
    git pull
    php artisan opcache:clear
    npm run production
@endtask

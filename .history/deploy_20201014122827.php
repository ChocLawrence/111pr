<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', '111pr');

// Project repository
set('repository', 'git@github.com:ChocLawrence/111pr.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

//set('use_relative_symlinks', false);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);


// Hosts

host('111-pr.com')
    ->user('lawrence')
    ->identityFile('~/.ssh/deployerkey')
    ->set('deploy_path', '/var/www/html/111pr');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');


<?php

use Sami\Sami;
use Sami\RemoteRepository\GitHubRemoteRepository;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('vendor')
    ->exclude('tests')
    ->exclude('docs')
    ->in('../router');

return new Sami($iterator, array(
    'title'                => 'Stark PHP API',
    'build_dir'            => __DIR__.'/build-router',
    'cache_dir'            => __DIR__.'/cache-router',
    'remote_repository'    => new GitHubRemoteRepository('stark-php/router', '../router'),
    'default_opened_level' => 2,
));

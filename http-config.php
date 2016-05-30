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
    ->in('../http');

return new Sami($iterator, array(
    'title'                => 'Stark PHP API',
    'build_dir'            => __DIR__.'/build-http',
    'cache_dir'            => __DIR__.'/cache-http',
    'remote_repository'    => new GitHubRemoteRepository('stark-php/http', '../http'),
    'default_opened_level' => 2,
));

<?php

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

$console = new Application('Project - Console', 'n/a');
$console->getDefinition()->addOption(new InputOption('--env', '-e', InputOption::VALUE_REQUIRED, 'The Environment name.', 'dev'));
$console->setDispatcher($app['dispatcher']);

/**
 * Example console command
 */
$console
    ->register('my-command')
    ->setDefinition(array(
        //new InputOption('my-option', null, InputOption::VALUE_REQUIRED, 'Required option'),
    ))
    ->setDescription('Example console command')
    ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
        echo "Example output" . PHP_EOL;
    })
;

return $console;

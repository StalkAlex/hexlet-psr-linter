<?php
/**
 * Created by PhpStorm.
 * User: AlexandrAboimov
 * Date: 03.08.2016
 * Time: 16:43
 */

namespace HexletPsrLinter;


use Cilex\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Runs linter process
 */
class LintCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('lint')
            ->setDescription('Analyze your php code');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }

}
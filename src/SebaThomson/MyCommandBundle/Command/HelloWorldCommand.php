<?php

namespace SebaThomson\MyCommandBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorldCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('st:hello')
            ->setDescription('My First Command!!')
            ->addArgument(
                'name',
                InputArgument::OPTIONAL,
                'Please, insert a name?'
            )
            ->addOption(
                'upper',
                null,
                InputOption::VALUE_NONE,
                'If set, the message will yell in uppercase letters'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        if ($name) {
            $text = 'Hello '.$name;
        } else {
            $text = 'Hello World';
        }

        if ($input->getOption('upper')) {
            $text = strtoupper($text);
        }

        $output->writeln($text);
    }
}

<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Process\Process;

class InstallCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('app:install')->setDescription('Installs program and updates environment variables');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Installation');
        $io->section('Shell');
        $io->text('Setting environment variables.');
        $this->setEnvironmentVariables();
    }

    protected function setEnvironmentVariables()
    {
        $kernelRootDir = $this->getContainer()->getParameter('kernel.root_dir');
        putenv('CLASSPATH='.$kernelRootDir.'/../src/Ai/LanguageBundle/Resources/lib/java/stanford-postagger.jar');
        putenv('STANFORD_MODELS='.$kernelRootDir.'/../src/Ai/LanguageBundle/Resources/lib/java/models/');
    }
}

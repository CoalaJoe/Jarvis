<?php
/**
 * Created with PhpStorm at 28.02.16.
 *
 * @author Dominik Müller (Ashura) ashura@aimei.ch
 * @link   http://aimei.ch/developers/Ashura
 */

namespace Ai\LanguageBundle\Service;

use Symfony\Component\Process\ProcessBuilder;
use Symfony\Component\Process\Process;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator;

/**
 * Class POSTagger
 *
 * @package Ai\LanguageBundle\Service
 */
class POSTagger
{
    /**
     * @var string
     */
    protected $pythonCli;

    /**
     * @var string
     */
    protected $posDir;

    /**
     * @var string
     */
    protected $scriptLocation;

    /**
     * POSTagger constructor.
     *
     * @param string $pythonCli
     * @param string $kernelRoot
     */
    public function __construct(string $pythonCli, string $kernelRoot)
    {
        $this->pythonCli = $pythonCli;
        //$this->scriptLocation = $kernelRoot."/../src/Ai/LanguageBundle/Resources/lib/python/posTagger.py";
        $this->posDir        = $kernelRoot."/../src/Ai/LanguageBundle/Resources/lib/java/pos";
        $this->scriptLocation = $this->posDir."/stanford-postagger.sh";
    }

    /**
     * @param string $string
     *
     * @return array
     */
    public function tag(string $string):array
    {
        // Returns with normalized WordClass
        $builder = new ProcessBuilder();

        if (!is_dir('/tmp/jarvis')) {
            $preProc = new Process('mkdir /tmp/jarvis');
            $preProc->run();
            if (!$preProc->isSuccessful()) {
                throw new \RuntimeException($preProc->getErrorOutput());
            }
        }


        $builder->setPrefix('./stanford-postagger.sh');

        $tokenGenerator = new UriSafeTokenGenerator();
        $token          = $tokenGenerator->generateToken();
        $filename       = "/tmp/jarvis/".$token.".txt";

        $fs = new Filesystem();
        $fs->dumpFile($filename, $string);

        $builder->setArguments(['models/german-fast.tagger', $filename]);

        $process = $builder->getProcess();
        $process->setWorkingDirectory($this->posDir);
        $process->run();
        if (!$process->isSuccessful()) {
            throw new \RuntimeException($process->getErrorOutput());
        }

        if (is_file($filename)) {
            $postProc = new Process('rm '.$filename);
            $postProc->run();
            if (!$postProc->isSuccessful()) {
                throw new \RuntimeException($postProc->getErrorOutput());
            }
        }

        $textTree = $this->parse($process->getOutput());

        return $textTree;
    }

    /**
     * @param string $rawString
     *
     * @return array
     */
    private function parse(string $rawString):array
    {
        $formatedOutput = array();
        $sentences = explode("\n", trim($rawString));
        foreach ($sentences as $sentence) {
            $sen = array();
            $pairs = explode(' ', $sentence);
            foreach ($pairs as $pair) {
                $explode = explode('_', $pair);
                $sen[$explode[0]] = $explode[1];
            }
            $formatedOutput[] = $sen;
        }

        return $formatedOutput;
    }


    /**
     * @param array $textTree
     */
    private function learn(array $textTree)
    {
        foreach ($textTree as $sentence) {

            foreach ($sentence as $word) {

            }
        }
    }

}

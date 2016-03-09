<?php
/**
 * Created with PhpStorm at 08.03.16.
 *
 * @author Dominik Müller (Ashura) ashura@aimei.ch
 * @link   http://aimei.ch/developers/Ashura
 */

namespace Ai\CommandBundle\Service;


use Ai\CommandBundle\Document\Command;
use Ai\LanguageBundle\Document\WordClass;

/**
 * Class ActionExtractor
 *
 * @package Ai\CommandBundle\Service
 */
class ActionExtractor
{
    /**
     * @param array $textTree
     *
     * @return Command
     */
    public function extract(array $textTree):Command
    {
        $commands = array();
        // TODO: Decide when to return multiple Commands.
        $command = new Command();
        foreach ($textTree as $sentence) {
            foreach ($sentence as $word => $type) {
                $sen = array();
                if ($type === WordClass::TYPE_INFINITIVE) {
                    $sen[$word] = $type;
                    $command->addAction($word);
                }
                if ($type === WordClass::TYPE_NOUN_NORMAL) {
                    $sen[$word] = $type;
                    $command->setObjectType($word);
                }
            }
        }

        return $command;
    }
}

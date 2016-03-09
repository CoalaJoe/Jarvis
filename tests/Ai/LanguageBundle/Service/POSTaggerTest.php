<?php
/**
 * Created with PhpStorm at 09.03.16.
 *
 * @author Dominik Müller (Ashura) ashura@aimei.ch
 * @link   http://aimei.ch/developers/Ashura
 */

namespace tests\Ai\LanguageBundle\Service;


use Ai\LanguageBundle\Document\WordClass;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class POSTaggerTest
 *
 * @package tests\Ai\LanguageBundle\Service
 */
class POSTaggerTest extends WebTestCase
{

    public function testTag()
    {
        $client = static::createClient();
        $posTagger = $client->getContainer()->get('language.pos.tagger');

        $taggedText = $posTagger->tag('Guten Tag. Das ist ein Test.');

        $this->assertEquals(count($taggedText), 2);
        $this->assertEquals(count($taggedText[0]), 3);
    }
}

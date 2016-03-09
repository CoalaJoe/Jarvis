<?php
/**
 * Created with PhpStorm at 28.02.16.
 *
 * @author Dominik Müller (Ashura) ashura@aimei.ch
 * @link   http://aimei.ch/developers/Ashura
 */

namespace tests\Ai\LanguageBundle\Document;


use Ai\LanguageBundle\Document\WordClass;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Class WordClassTest
 *
 * @package tests\Ai\LanguageBundle\Document
 */
class WordClassTest extends KernelTestCase
{
    /**
     * Tests static getTypes method on WordClass class
     */
    public function testGetTypes()
    {
        $types = WordClass::getTypes();

        $this->assertNotEmpty($types);
    }
}

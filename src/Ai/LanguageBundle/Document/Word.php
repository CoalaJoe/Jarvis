<?php
/**
 * Created with PhpStorm at 21.02.16.
 *
 * @author Dominik Müller (Ashura) ashura@aimei.ch
 * @link   http://aimei.ch/developers/Ashura
 */

namespace Ai\LanguageBundle\Document;

/**
 * Class Word
 *
 * @package Ai\LanguageBundle\Document
 */
class Word
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $wordClass;

    /**
     * @var string
     */
    private $text;

    /**
     * @var int
     */
    private $amount;

    /**
     * Word constructor.
     */
    public function __construct()
    {
        $this->amount = 1;
    }

    /**
     * @return int
     */
    public function getId():int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getWordClass():string
    {
        return $this->wordClass;
    }

    /**
     * @param string $wordClass
     *
     * @return Word $this
     */
    public function setWordClass($wordClass):Word
    {
        if (in_array($wordClass, WordClass::getTypes())) {
            $this->wordClass = $wordClass;
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getText():string
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return Word $this
     */
    public function setText($text):Word
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return Word $this
     */
    public function addAmount():Word
    {
        $this->amount++;

        return $this;
    }
}

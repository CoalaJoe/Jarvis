<?php
/**
 * Created with PhpStorm at 21.02.16.
 *
 * @author Dominik Müller (Ashura) ashura@aimei.ch
 * @link   http://aimei.ch/developers/Ashura
 */

namespace Ai\LanguageBundle\Document;


/**
 * Class Sentence
 *
 * @package Ai\LanguageBundle\Document
 */
class Sentence
{
    /**
     * @var array(Word)
     */
    private $words;

    /**
     * @var int
     */
    private $amount;

    /**
     * Sentence constructor.
     */
    public function __construct()
    {
        $this->amount = 1;
    }

    /**
     * @return array
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * @param array $words
     *
     * @return Sentence $this
     */
    public function setWords( $words):Sentence
    {
        $this->words = $words;

        return $this;
    }

    /**
     * @param string $word
     *
     * @return Sentence $this
     */
    public function addWord($word):Sentence
    {
        // TODO: Implement

        return $this;
    }
}

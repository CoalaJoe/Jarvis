<?php
/**
 * Created with PhpStorm at 21.02.16.
 *
 * @author Dominik Müller (Ashura) ashura@aimei.ch
 * @link   http://aimei.ch/developers/Ashura
 */

namespace Ai\LanguageBundle\Document;

/**
 * Class WordClass
 *
 * @package Ai\LanguageBundle\Document
 */
class WordClass
{
    // http://stackoverflow.com/questions/4570751/what-tag-set-is-used-in-opennlps-german-maxent-model
    const TYPE_ADJECTIVE_ATTRIBUTIVE = 'ADJA';
    const TYPE_ADJECTIVE_ADVERBIAL   = 'ADJD';
    const TYPE_ADVERB                = 'ADV';

    const TYPE_PREPOSITION         = 'APPR';
    const TYPE_PREPOSITION_ARTICLE = 'APPRART';
    const TYPE_POSTPOSITION        = 'APPO';

    const TYPE_CIRCUM_POSITION_RIGHT = 'APZR';
    const TYPE_ARTICLE               = 'ART';
    const TYPE_CARDINAL_NUMBER       = 'CAR';
    const TYPE_FOREIGN_WORD          = 'FM';
    const TYPE_INTERJECTION          = 'ITJ';

    const TYPE_KONJUNCTION_INFINITIVE = 'KOUI';
    const TYPE_KONJUNCTION_SENTENCE   = 'KOUS';
    const TYPE_KONJUNCTION_SIBLING    = 'KON';
    const TYPE_KONJUNCTION_COMPARE    = 'KOKOM';

    const TYPE_NOUN_NORMAL = 'NN';
    const TYPE_NOUN_NAME   = 'NE';

    const TYPE_PRONOUN_DEMONSTRATIVE_SUB                   = 'PDS';
    const TYPE_PRONOUN_DEMONSTRATIVE_ATTR                  = 'PDAT';
    const TYPE_PRONOUN_INDEFINITE_SUB                      = 'PIS';
    const TYPE_PRONOUN_INDEFINITE_ATTR                     = 'PIAT';
    const TYPE_PRONOUN_INDEFINITE_ATTR_DETERMINATIVE       = 'PIDAT';
    const TYPE_PRONOUN_POSSESSIVE_SUB                      = 'PPOSS';
    const TYPE_PRONOUN_POSSESSIVE_ATTR                     = 'PPOSAT';
    const TYPE_PRONOUN_RELATIVE_SUB                        = 'PRELS';
    const TYPE_PRONOUN_RELATIVE_ATTR                       = 'PRELAT';
    const TYPE_PRONOUN_PERSONAL_IRREFLEXIVE                = 'PPER';
    const TYPE_PRONOUN_PERSONAL_REFLEXIVE                  = 'PRF';
    const TYPE_PRONOUN_INTERROGATIVE_SUB                   = 'PWS';
    const TYPE_PRONOUN_INTERROGATIVE_ATTR                  = 'PWAT';
    const TYPE_PRONOUN_INTERROGATIVE_OR_RELATIVE_ADVERBIAL = 'PWAV';

    const TYPE_PRONOMINAL_ADVERB = 'PROAV';

    const TYPE_PARTICLE_INFINITIVE              = 'PTKZU';
    const TYPE_PARTICLE_NEGATION                = 'PTKNEG';
    const TYPE_PARTICLE_VERB_APPENDAGE          = 'PTKVZ';
    const TYPE_PARTICLE_ANSWER                  = 'PTKANT';
    const TYPE_PARTICLE_FOR_ADJECTIVE_OR_ADVERB = 'PRKA';

    const TYPE_COMPOSITION_FIRST_PART = 'TRUNC';

    const TYPE_VERB_FINITE_FULL         = 'VVFIN';
    const TYPE_VERB_INFINITE_FULL       = 'VVIMP';
    const TYPE_INFINITIVE               = 'VVINF';
    const TYPE_INFINITIVE_WITH_ZU       = 'VVIZU';
    const TYPE_PARTICIPLE_PERFECT       = 'VVPP';
    const TYPE_VERB_FINITE_AUXILIARY    = 'VAFIN';
    const TYPE_IMPERATIVE_AUXILIARY     = 'VAIMP';
    const TYPE_INFINITIVE_AUXILIARY     = 'VAINF';
    const TYPE_VERB_FINITE_MODAL        = 'VMFIN';
    const TYPE_VERB_INFINITE_MODAL      = 'VMINF';
    const TYPE_PARTICIPLE_PERFECT_MODAL = 'VMPP';

    const TYPE_NOT_WORD  = 'XY';
    const TYPE_UNDEFINED = 'UNDEFINED';


    /**
     * Returns WordTypes
     *
     * @return array
     */
    public static function getTypes():array
    {
        $rc        = new \ReflectionClass(__CLASS__);
        $constants = $rc->getConstants();
        $types     = array();
        foreach ($constants as $name => $constant) {
            if (substr($name, 0, 5) === 'TYPE_') {
                $types[$name] = $constant;
            }
        }

        return $types;
    }
}

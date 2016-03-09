<?php
/**
 * Created with PhpStorm at 09.03.16.
 *
 * @author Dominik Müller (Ashura) ashura@aimei.ch
 * @link   http://aimei.ch/developers/Ashura
 */

namespace Ai\CommandBundle\Document;


/**
 * Class Action
 *
 * @package Ai\CommandBundle\Document
 */
class Command
{
    /**
     * @var int
     */
    private $id;


    private $actions;

    /**
     * Example "Light" in general
     *
     * @var
     */
    private $objectType;

    /**
     * specific light. Example the light in the floor.
     *
     * @var array
     */
    private $objects;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * Command constructor.
     */
    public function __construct()
    {
        $this->objects   = [];
        $this->actions   = [];
        $this->createdAt = new \DateTime();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param $object
     *
     * @return $this
     */
    public function addObject($object)
    {
        $this->objects[] = $object;

        return $this;
    }

    /**
     * @param $action
     *
     * @return $this
     */
    public function addAction($action)
    {
        // TODO: String to action. Store action in database and add synonyms.

        $this->actions[] = $action;

        return $this;
    }

    public function getObjectType()
    {
        return $this->objectType;
    }

    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;

        return $this;
    }

    public function isValid()
    {
        // TODO: If object doesn't exist. Don't validate.

        // TODO: If objectType is set, multiple objects are existing and one has to be set.

        // TODO: Action is set but no objects or objectGroup

    }
}

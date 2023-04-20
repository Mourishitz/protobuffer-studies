<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/main/proto/person.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Proto file for a Person model.
 *
 * Generated from protobuf message <code>Person</code>
 */
class Person extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>int32 age = 2;</code>
     */
    protected $age = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type int $age
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\Main\Proto\Person::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 age = 2;</code>
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Generated from protobuf field <code>int32 age = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAge($var)
    {
        GPBUtil::checkInt32($var);
        $this->age = $var;

        return $this;
    }

}

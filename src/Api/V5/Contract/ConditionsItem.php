<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ConditionsItem
{

    protected $Operand = null;

    protected $Operator = null;

    protected $Arguments = [];

    /**
     * Creates a new instance of ConditionsItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Operand.
     *
     * @return string
     */
    public function getOperand()
    {
        return $this->Operand;
    }

    /**
     * Sets Operand.
     *
     * @param string $value
     * @return $this
     */
    public function setOperand($value)
    {
        $this->Operand = $value;

        return $this;
    }

    /**
     * Gets Operator.
     *
     * @return string
     * @see SmartAdTargetStringConditionOperatorEnum
     */
    public function getOperator()
    {
        return $this->Operator;
    }

    /**
     * Sets Operator.
     *
     * @param string $value
     * @return $this
     * @see SmartAdTargetStringConditionOperatorEnum
     */
    public function setOperator($value)
    {
        $this->Operator = $value;

        return $this;
    }

    /**
     * Gets Arguments.
     *
     * @return string[]
     */
    public function getArguments()
    {
        return $this->Arguments;
    }

    /**
     * Sets Arguments.
     *
     * @param string[] $value
     * @return $this
     */
    public function setArguments(array $value)
    {
        $this->Arguments = $value;

        return $this;
    }


}


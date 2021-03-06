<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartAdTargetGetItem
{

//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $AdGroupId = null;

//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $AverageCpc = null;

//    Can be omit.
//    protected $AverageCpa = null;

//    Can be omit.
//    protected $StrategyPriority = null;

//    Can be omit.
//    protected $State = null;

//    Can be omit.
//    protected $Audience = null;

//    Can be omit.
//    protected $Conditions = null;

//    Can be omit.
//    protected $ConditionType = null;

//    Can be omit.
//    protected $AvailableItemsOnly = null;

    /**
     * Creates a new instance of SmartAdTargetGetItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int|null
     */
    public function getId()
    {
        return isset($this->Id) ? $this->Id : null;
    }

    /**
     * Sets Id.
     *
     * @param int|null $value
     * @return $this
     */
    public function setId($value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets AdGroupId.
     *
     * @return int|null
     */
    public function getAdGroupId()
    {
        return isset($this->AdGroupId) ? $this->AdGroupId : null;
    }

    /**
     * Sets AdGroupId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAdGroupId($value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Gets CampaignId.
     *
     * @return int|null
     */
    public function getCampaignId()
    {
        return isset($this->CampaignId) ? $this->CampaignId : null;
    }

    /**
     * Sets CampaignId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setCampaignId($value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets Name.
     *
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }

    /**
     * Sets Name.
     *
     * @param string|null $value
     * @return $this
     */
    public function setName($value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets AverageCpc.
     *
     * @return int|null
     */
    public function getAverageCpc()
    {
        return isset($this->AverageCpc) ? $this->AverageCpc : null;
    }

    /**
     * Sets AverageCpc.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAverageCpc($value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Gets AverageCpa.
     *
     * @return int|null
     */
    public function getAverageCpa()
    {
        return isset($this->AverageCpa) ? $this->AverageCpa : null;
    }

    /**
     * Sets AverageCpa.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAverageCpa($value = null)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    /**
     * Gets StrategyPriority.
     *
     * @return string|null
     * @see PriorityEnum
     */
    public function getStrategyPriority()
    {
        return isset($this->StrategyPriority) ? $this->StrategyPriority : null;
    }

    /**
     * Sets StrategyPriority.
     *
     * @param string|null $value
     * @return $this
     * @see PriorityEnum
     */
    public function setStrategyPriority($value = null)
    {
        $this->StrategyPriority = $value;

        return $this;
    }

    /**
     * Gets State.
     *
     * @return string|null
     * @see StateEnum
     */
    public function getState()
    {
        return isset($this->State) ? $this->State : null;
    }

    /**
     * Sets State.
     *
     * @param string|null $value
     * @return $this
     * @see StateEnum
     */
    public function setState($value = null)
    {
        $this->State = $value;

        return $this;
    }

    /**
     * Gets Audience.
     *
     * @return string|null
     * @see AudienceEnum
     */
    public function getAudience()
    {
        return isset($this->Audience) ? $this->Audience : null;
    }

    /**
     * Sets Audience.
     *
     * @param string|null $value
     * @return $this
     * @see AudienceEnum
     */
    public function setAudience($value = null)
    {
        $this->Audience = $value;

        return $this;
    }

    /**
     * Gets Conditions.
     *
     * @return ConditionsArray|null
     */
    public function getConditions()
    {
        return isset($this->Conditions) ? $this->Conditions : null;
    }

    /**
     * Sets Conditions.
     *
     * @param ConditionsArray|null $value
     * @return $this
     */
    public function setConditions(ConditionsArray $value = null)
    {
        $this->Conditions = $value;

        return $this;
    }

    /**
     * Gets ConditionType.
     *
     * @return string|null
     * @see ConditionTypeEnum
     */
    public function getConditionType()
    {
        return isset($this->ConditionType) ? $this->ConditionType : null;
    }

    /**
     * Sets ConditionType.
     *
     * @param string|null $value
     * @return $this
     * @see ConditionTypeEnum
     */
    public function setConditionType($value = null)
    {
        $this->ConditionType = $value;

        return $this;
    }

    /**
     * Gets AvailableItemsOnly.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getAvailableItemsOnly()
    {
        return isset($this->AvailableItemsOnly) ? $this->AvailableItemsOnly : null;
    }

    /**
     * Sets AvailableItemsOnly.
     *
     * @param string|null $value
     * @return $this
     * @see YesNoEnum
     */
    public function setAvailableItemsOnly($value = null)
    {
        $this->AvailableItemsOnly = $value;

        return $this;
    }


}


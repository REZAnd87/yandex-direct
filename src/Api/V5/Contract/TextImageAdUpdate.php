<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextImageAdUpdate extends ImageAdUpdateBase
{

//    Can be omit.
//    protected $Href = null;

//    Can be omit.
//    protected $TurboPageId = null;

    /**
     * Creates a new instance of TextImageAdUpdate.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Href.
     *
     * @return string|null
     */
    public function getHref()
    {
        return isset($this->Href) ? $this->Href : null;
    }

    /**
     * Sets Href.
     *
     * @param string|null $value
     * @return $this
     */
    public function setHref($value = null)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * Gets TurboPageId.
     *
     * @return int|null
     */
    public function getTurboPageId()
    {
        return isset($this->TurboPageId) ? $this->TurboPageId : null;
    }

    /**
     * Sets TurboPageId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setTurboPageId($value = null)
    {
        $this->TurboPageId = $value;

        return $this;
    }


}


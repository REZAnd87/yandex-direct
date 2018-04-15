<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetKeywordBidsResponse extends GetResponseGeneral
{

    protected $KeywordBids = null;

    /**
     * Creates a new instance of GetKeywordBidsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets KeywordBids.
     *
     * @return KeywordBidGetItem[]|null
     */
    public function getKeywordBids()
    {
        return $this->KeywordBids;
    }

    /**
     * Sets KeywordBids.
     *
     * @param KeywordBidGetItem[]|null $value
     * @return self
     */
    public function setKeywordBids(array $value = null)
    {
        $this->KeywordBids = $value;

        return $this;
    }


}


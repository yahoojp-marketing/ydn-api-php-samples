<?php

namespace Jp\YahooApis\YDN\V201907\RetargetingTag;

class RetargetingTag
{

    /**
     * @var string $retargetingTagId
     */
    protected $retargetingTagId = null;

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var RetargetingTagApprovalStatus $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var string $tag
     */
    protected $tag = null;

    /**
     * @param string $retargetingTagId
     * @param int $accountId
     */
    public function __construct($retargetingTagId, $accountId)
    {
      $this->retargetingTagId = $retargetingTagId;
      $this->accountId = $accountId;
    }

    /**
     * @return string
     */
    public function getRetargetingTagId()
    {
      return $this->retargetingTagId;
    }

    /**
     * @param string $retargetingTagId
     * @return \Jp\YahooApis\YDN\V201907\RetargetingTag\RetargetingTag
     */
    public function setRetargetingTagId($retargetingTagId)
    {
      $this->retargetingTagId = $retargetingTagId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return \Jp\YahooApis\YDN\V201907\RetargetingTag\RetargetingTag
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return RetargetingTagApprovalStatus
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param RetargetingTagApprovalStatus $approvalStatus
     * @return \Jp\YahooApis\YDN\V201907\RetargetingTag\RetargetingTag
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
      return $this->tag;
    }

    /**
     * @param string $tag
     * @return \Jp\YahooApis\YDN\V201907\RetargetingTag\RetargetingTag
     */
    public function setTag($tag)
    {
      $this->tag = $tag;
      return $this;
    }

}

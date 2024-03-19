<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkVoidedCrmNoticeCommentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MarkVoidedCrmNoticeCommentRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmNoticeComment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoCrmNoticeComment
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO $MidocoCrmNoticeComment = null;
    /**
     * The customerInternalVersion
     * @var int|null
     */
    protected ?int $customerInternalVersion = null;
    /**
     * Constructor method for MarkVoidedCrmNoticeCommentRequest
     * @uses MarkVoidedCrmNoticeCommentRequest::setMidocoCrmNoticeComment()
     * @uses MarkVoidedCrmNoticeCommentRequest::setCustomerInternalVersion()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO $midocoCrmNoticeComment
     * @param int $customerInternalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO $midocoCrmNoticeComment = null, ?int $customerInternalVersion = null)
    {
        $this
            ->setMidocoCrmNoticeComment($midocoCrmNoticeComment)
            ->setCustomerInternalVersion($customerInternalVersion);
    }
    /**
     * Get MidocoCrmNoticeComment value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO|null
     */
    public function getMidocoCrmNoticeComment(): ?\Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO
    {
        return $this->MidocoCrmNoticeComment;
    }
    /**
     * Set MidocoCrmNoticeComment value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO $midocoCrmNoticeComment
     * @return \Pggns\MidocoApi\Crmsd\StructType\MarkVoidedCrmNoticeCommentRequest
     */
    public function setMidocoCrmNoticeComment(?\Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO $midocoCrmNoticeComment = null): self
    {
        $this->MidocoCrmNoticeComment = $midocoCrmNoticeComment;
        
        return $this;
    }
    /**
     * Get customerInternalVersion value
     * @return int|null
     */
    public function getCustomerInternalVersion(): ?int
    {
        return $this->customerInternalVersion;
    }
    /**
     * Set customerInternalVersion value
     * @param int $customerInternalVersion
     * @return \Pggns\MidocoApi\Crmsd\StructType\MarkVoidedCrmNoticeCommentRequest
     */
    public function setCustomerInternalVersion(?int $customerInternalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($customerInternalVersion) && !(is_int($customerInternalVersion) || ctype_digit($customerInternalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerInternalVersion, true), gettype($customerInternalVersion)), __LINE__);
        }
        $this->customerInternalVersion = $customerInternalVersion;
        
        return $this;
    }
}

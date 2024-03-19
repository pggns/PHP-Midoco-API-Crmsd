<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmNoticeCommentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCrmNoticeCommentResponse extends AbstractStructBase
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
     * Constructor method for SaveCrmNoticeCommentResponse
     * @uses SaveCrmNoticeCommentResponse::setMidocoCrmNoticeComment()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO $midocoCrmNoticeComment
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO $midocoCrmNoticeComment = null)
    {
        $this
            ->setMidocoCrmNoticeComment($midocoCrmNoticeComment);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCrmNoticeCommentResponse
     */
    public function setMidocoCrmNoticeComment(?\Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO $midocoCrmNoticeComment = null): self
    {
        $this->MidocoCrmNoticeComment = $midocoCrmNoticeComment;
        
        return $this;
    }
}

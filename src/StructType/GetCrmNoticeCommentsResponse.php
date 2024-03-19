<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmNoticeCommentsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrmNoticeCommentsResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmNoticeComment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmNoticeComment
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO[]
     */
    protected ?array $MidocoCrmNoticeComment = null;
    /**
     * Constructor method for GetCrmNoticeCommentsResponse
     * @uses GetCrmNoticeCommentsResponse::setMidocoCrmNoticeComment()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO[] $midocoCrmNoticeComment
     */
    public function __construct(?array $midocoCrmNoticeComment = null)
    {
        $this
            ->setMidocoCrmNoticeComment($midocoCrmNoticeComment);
    }
    /**
     * Get MidocoCrmNoticeComment value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO[]
     */
    public function getMidocoCrmNoticeComment(): ?array
    {
        return $this->MidocoCrmNoticeComment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmNoticeComment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmNoticeComment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmNoticeCommentForArrayConstraintFromSetMidocoCrmNoticeComment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCrmNoticeCommentsResponseMidocoCrmNoticeCommentItem) {
            // validation for constraint: itemType
            if (!$getCrmNoticeCommentsResponseMidocoCrmNoticeCommentItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO) {
                $invalidValues[] = is_object($getCrmNoticeCommentsResponseMidocoCrmNoticeCommentItem) ? get_class($getCrmNoticeCommentsResponseMidocoCrmNoticeCommentItem) : sprintf('%s(%s)', gettype($getCrmNoticeCommentsResponseMidocoCrmNoticeCommentItem), var_export($getCrmNoticeCommentsResponseMidocoCrmNoticeCommentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmNoticeComment property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmNoticeComment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO[] $midocoCrmNoticeComment
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticeCommentsResponse
     */
    public function setMidocoCrmNoticeComment(?array $midocoCrmNoticeComment = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmNoticeCommentArrayErrorMessage = self::validateMidocoCrmNoticeCommentForArrayConstraintFromSetMidocoCrmNoticeComment($midocoCrmNoticeComment))) {
            throw new InvalidArgumentException($midocoCrmNoticeCommentArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmNoticeComment = $midocoCrmNoticeComment;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmNoticeComment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticeCommentsResponse
     */
    public function addToMidocoCrmNoticeComment(\Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmNoticeComment property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmNoticeCommentDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmNoticeComment[] = $item;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateSubjectRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateSubjectRequest extends AbstractStructBase
{
    /**
     * The MidocoSubjectElement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSubjectElement
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectElement[]
     */
    protected ?array $MidocoSubjectElement = null;
    /**
     * The MidocoCrmPrintType
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmPrintType
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmPrintType|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmPrintType $MidocoCrmPrintType = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The documentNo
     * @var int|null
     */
    protected ?int $documentNo = null;
    /**
     * The subjectText
     * @var string|null
     */
    protected ?string $subjectText = null;
    /**
     * The id
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * Constructor method for CalculateSubjectRequest
     * @uses CalculateSubjectRequest::setMidocoSubjectElement()
     * @uses CalculateSubjectRequest::setMidocoCrmPrintType()
     * @uses CalculateSubjectRequest::setOrderNo()
     * @uses CalculateSubjectRequest::setCustomerId()
     * @uses CalculateSubjectRequest::setDocumentNo()
     * @uses CalculateSubjectRequest::setSubjectText()
     * @uses CalculateSubjectRequest::setId()
     * @uses CalculateSubjectRequest::setDocumentId()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectElement[] $midocoSubjectElement
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmPrintType $midocoCrmPrintType
     * @param int $orderNo
     * @param int $customerId
     * @param int $documentNo
     * @param string $subjectText
     * @param string $id
     * @param int $documentId
     */
    public function __construct(?array $midocoSubjectElement = null, ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmPrintType $midocoCrmPrintType = null, ?int $orderNo = null, ?int $customerId = null, ?int $documentNo = null, ?string $subjectText = null, ?string $id = null, ?int $documentId = null)
    {
        $this
            ->setMidocoSubjectElement($midocoSubjectElement)
            ->setMidocoCrmPrintType($midocoCrmPrintType)
            ->setOrderNo($orderNo)
            ->setCustomerId($customerId)
            ->setDocumentNo($documentNo)
            ->setSubjectText($subjectText)
            ->setId($id)
            ->setDocumentId($documentId);
    }
    /**
     * Get MidocoSubjectElement value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectElement[]
     */
    public function getMidocoSubjectElement(): ?array
    {
        return $this->MidocoSubjectElement;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSubjectElement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSubjectElement method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSubjectElementForArrayConstraintFromSetMidocoSubjectElement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $calculateSubjectRequestMidocoSubjectElementItem) {
            // validation for constraint: itemType
            if (!$calculateSubjectRequestMidocoSubjectElementItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectElement) {
                $invalidValues[] = is_object($calculateSubjectRequestMidocoSubjectElementItem) ? get_class($calculateSubjectRequestMidocoSubjectElementItem) : sprintf('%s(%s)', gettype($calculateSubjectRequestMidocoSubjectElementItem), var_export($calculateSubjectRequestMidocoSubjectElementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSubjectElement property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectElement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSubjectElement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectElement[] $midocoSubjectElement
     * @return \Pggns\MidocoApi\Crmsd\StructType\CalculateSubjectRequest
     */
    public function setMidocoSubjectElement(?array $midocoSubjectElement = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSubjectElementArrayErrorMessage = self::validateMidocoSubjectElementForArrayConstraintFromSetMidocoSubjectElement($midocoSubjectElement))) {
            throw new InvalidArgumentException($midocoSubjectElementArrayErrorMessage, __LINE__);
        }
        $this->MidocoSubjectElement = $midocoSubjectElement;
        
        return $this;
    }
    /**
     * Add item to MidocoSubjectElement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectElement $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\CalculateSubjectRequest
     */
    public function addToMidocoSubjectElement(\Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectElement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectElement) {
            throw new InvalidArgumentException(sprintf('The MidocoSubjectElement property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectElement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSubjectElement[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmPrintType value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmPrintType|null
     */
    public function getMidocoCrmPrintType(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmPrintType
    {
        return $this->MidocoCrmPrintType;
    }
    /**
     * Set MidocoCrmPrintType value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmPrintType $midocoCrmPrintType
     * @return \Pggns\MidocoApi\Crmsd\StructType\CalculateSubjectRequest
     */
    public function setMidocoCrmPrintType(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmPrintType $midocoCrmPrintType = null): self
    {
        $this->MidocoCrmPrintType = $midocoCrmPrintType;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\CalculateSubjectRequest
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\CalculateSubjectRequest
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get documentNo value
     * @return int|null
     */
    public function getDocumentNo(): ?int
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param int $documentNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\CalculateSubjectRequest
     */
    public function setDocumentNo(?int $documentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($documentNo) && !(is_int($documentNo) || ctype_digit($documentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
        return $this;
    }
    /**
     * Get subjectText value
     * @return string|null
     */
    public function getSubjectText(): ?string
    {
        return $this->subjectText;
    }
    /**
     * Set subjectText value
     * @param string $subjectText
     * @return \Pggns\MidocoApi\Crmsd\StructType\CalculateSubjectRequest
     */
    public function setSubjectText(?string $subjectText = null): self
    {
        // validation for constraint: string
        if (!is_null($subjectText) && !is_string($subjectText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subjectText, true), gettype($subjectText)), __LINE__);
        }
        $this->subjectText = $subjectText;
        
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Pggns\MidocoApi\Crmsd\StructType\CalculateSubjectRequest
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Crmsd\StructType\CalculateSubjectRequest
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
}

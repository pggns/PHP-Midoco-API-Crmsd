<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCustomerByCriteriaRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCustomerByCriteriaRequest extends AbstractStructBase
{
    /**
     * The feeGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $feeGroup = null;
    /**
     * The addressTypeId
     * @var int|null
     */
    protected ?int $addressTypeId = null;
    /**
     * The mediaId
     * @var string|null
     */
    protected ?string $mediaId = null;
    /**
     * The lockReasonId
     * @var string|null
     */
    protected ?string $lockReasonId = null;
    /**
     * The deletedReasonId
     * @var int|null
     */
    protected ?int $deletedReasonId = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The printOptionId
     * @var int|null
     */
    protected ?int $printOptionId = null;
    /**
     * The criteriaTypeId
     * @var string|null
     */
    protected ?string $criteriaTypeId = null;
    /**
     * The paymentConditionId
     * @var string|null
     */
    protected ?string $paymentConditionId = null;
    /**
     * The travellerType
     * @var string|null
     */
    protected ?string $travellerType = null;
    /**
     * The connectionTypeId
     * @var int|null
     */
    protected ?int $connectionTypeId = null;
    /**
     * The salutationId
     * @var string|null
     */
    protected ?string $salutationId = null;
    /**
     * The accountNo
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The accountType
     * @var string|null
     */
    protected ?string $accountType = null;
    /**
     * The notDeleted
     * @var bool|null
     */
    protected ?bool $notDeleted = null;
    /**
     * Constructor method for SearchCustomerByCriteriaRequest
     * @uses SearchCustomerByCriteriaRequest::setFeeGroup()
     * @uses SearchCustomerByCriteriaRequest::setAddressTypeId()
     * @uses SearchCustomerByCriteriaRequest::setMediaId()
     * @uses SearchCustomerByCriteriaRequest::setLockReasonId()
     * @uses SearchCustomerByCriteriaRequest::setDeletedReasonId()
     * @uses SearchCustomerByCriteriaRequest::setCostCentre()
     * @uses SearchCustomerByCriteriaRequest::setPrintOptionId()
     * @uses SearchCustomerByCriteriaRequest::setCriteriaTypeId()
     * @uses SearchCustomerByCriteriaRequest::setPaymentConditionId()
     * @uses SearchCustomerByCriteriaRequest::setTravellerType()
     * @uses SearchCustomerByCriteriaRequest::setConnectionTypeId()
     * @uses SearchCustomerByCriteriaRequest::setSalutationId()
     * @uses SearchCustomerByCriteriaRequest::setAccountNo()
     * @uses SearchCustomerByCriteriaRequest::setAccountType()
     * @uses SearchCustomerByCriteriaRequest::setNotDeleted()
     * @param string[] $feeGroup
     * @param int $addressTypeId
     * @param string $mediaId
     * @param string $lockReasonId
     * @param int $deletedReasonId
     * @param string $costCentre
     * @param int $printOptionId
     * @param string $criteriaTypeId
     * @param string $paymentConditionId
     * @param string $travellerType
     * @param int $connectionTypeId
     * @param string $salutationId
     * @param string $accountNo
     * @param string $accountType
     * @param bool $notDeleted
     */
    public function __construct(?array $feeGroup = null, ?int $addressTypeId = null, ?string $mediaId = null, ?string $lockReasonId = null, ?int $deletedReasonId = null, ?string $costCentre = null, ?int $printOptionId = null, ?string $criteriaTypeId = null, ?string $paymentConditionId = null, ?string $travellerType = null, ?int $connectionTypeId = null, ?string $salutationId = null, ?string $accountNo = null, ?string $accountType = null, ?bool $notDeleted = null)
    {
        $this
            ->setFeeGroup($feeGroup)
            ->setAddressTypeId($addressTypeId)
            ->setMediaId($mediaId)
            ->setLockReasonId($lockReasonId)
            ->setDeletedReasonId($deletedReasonId)
            ->setCostCentre($costCentre)
            ->setPrintOptionId($printOptionId)
            ->setCriteriaTypeId($criteriaTypeId)
            ->setPaymentConditionId($paymentConditionId)
            ->setTravellerType($travellerType)
            ->setConnectionTypeId($connectionTypeId)
            ->setSalutationId($salutationId)
            ->setAccountNo($accountNo)
            ->setAccountType($accountType)
            ->setNotDeleted($notDeleted);
    }
    /**
     * Get feeGroup value
     * @return string[]
     */
    public function getFeeGroup(): ?array
    {
        return $this->feeGroup;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFeeGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeeGroup method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeGroupForArrayConstraintFromSetFeeGroup(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCustomerByCriteriaRequestFeeGroupItem) {
            // validation for constraint: itemType
            if (!is_string($searchCustomerByCriteriaRequestFeeGroupItem)) {
                $invalidValues[] = is_object($searchCustomerByCriteriaRequestFeeGroupItem) ? get_class($searchCustomerByCriteriaRequestFeeGroupItem) : sprintf('%s(%s)', gettype($searchCustomerByCriteriaRequestFeeGroupItem), var_export($searchCustomerByCriteriaRequestFeeGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The feeGroup property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set feeGroup value
     * @throws InvalidArgumentException
     * @param string[] $feeGroup
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByCriteriaRequest
     */
    public function setFeeGroup(?array $feeGroup = null): self
    {
        // validation for constraint: array
        if ('' !== ($feeGroupArrayErrorMessage = self::validateFeeGroupForArrayConstraintFromSetFeeGroup($feeGroup))) {
            throw new InvalidArgumentException($feeGroupArrayErrorMessage, __LINE__);
        }
        $this->feeGroup = $feeGroup;
        
        return $this;
    }
    /**
     * Add item to feeGroup value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByCriteriaRequest
     */
    public function addToFeeGroup(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The feeGroup property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->feeGroup[] = $item;
        
        return $this;
    }
    /**
     * Get addressTypeId value
     * @return int|null
     */
    public function getAddressTypeId(): ?int
    {
        return $this->addressTypeId;
    }
    /**
     * Set addressTypeId value
     * @param int $addressTypeId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByCriteriaRequest
     */
    public function setAddressTypeId(?int $addressTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($addressTypeId) && !(is_int($addressTypeId) || ctype_digit($addressTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressTypeId, true), gettype($addressTypeId)), __LINE__);
        }
        $this->addressTypeId = $addressTypeId;
        
        return $this;
    }
    /**
     * Get mediaId value
     * @return string|null
     */
    public function getMediaId(): ?string
    {
        return $this->mediaId;
    }
    /**
     * Set mediaId value
     * @param string $mediaId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByCriteriaRequest
     */
    public function setMediaId(?string $mediaId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediaId) && !is_string($mediaId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediaId, true), gettype($mediaId)), __LINE__);
        }
        $this->mediaId = $mediaId;
        
        return $this;
    }
    /**
     * Get lockReasonId value
     * @return string|null
     */
    public function getLockReasonId(): ?string
    {
        return $this->lockReasonId;
    }
    /**
     * Set lockReasonId value
     * @param string $lockReasonId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByCriteriaRequest
     */
    public function setLockReasonId(?string $lockReasonId = null): self
    {
        // validation for constraint: string
        if (!is_null($lockReasonId) && !is_string($lockReasonId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockReasonId, true), gettype($lockReasonId)), __LINE__);
        }
        $this->lockReasonId = $lockReasonId;
        
        return $this;
    }
    /**
     * Get deletedReasonId value
     * @return int|null
     */
    public function getDeletedReasonId(): ?int
    {
        return $this->deletedReasonId;
    }
    /**
     * Set deletedReasonId value
     * @param int $deletedReasonId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByCriteriaRequest
     */
    public function setDeletedReasonId(?int $deletedReasonId = null): self
    {
        // validation for constraint: int
        if (!is_null($deletedReasonId) && !(is_int($deletedReasonId) || ctype_digit($deletedReasonId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deletedReasonId, true), gettype($deletedReasonId)), __LINE__);
        }
        $this->deletedReasonId = $deletedReasonId;
        
        return $this;
    }
    /**
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByCriteriaRequest
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
        return $this;
    }
    /**
     * Get printOptionId value
     * @return int|null
     */
    public function getPrintOptionId(): ?int
    {
        return $this->printOptionId;
    }
    /**
     * Set printOptionId value
     * @param int $printOptionId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByCriteriaRequest
     */
    public function setPrintOptionId(?int $printOptionId = null): self
    {
        // validation for constraint: int
        if (!is_null($printOptionId) && !(is_int($printOptionId) || ctype_digit($printOptionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printOptionId, true), gettype($printOptionId)), __LINE__);
        }
        $this->printOptionId = $printOptionId;
        
        return $this;
    }
    /**
     * Get criteriaTypeId value
     * @return string|null
     */
    public function getCriteriaTypeId(): ?string
    {
        return $this->criteriaTypeId;
    }
    /**
     * Set criteriaTypeId value
     * @param string $criteriaTypeId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByCriteriaRequest
     */
    public function setCriteriaTypeId(?string $criteriaTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($criteriaTypeId) && !is_string($criteriaTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($criteriaTypeId, true), gettype($criteriaTypeId)), __LINE__);
        }
        $this->criteriaTypeId = $criteriaTypeId;
        
        return $this;
    }
    /**
     * Get paymentConditionId value
     * @return string|null
     */
    public function getPaymentConditionId(): ?string
    {
        return $this->paymentConditionId;
    }
    /**
     * Set paymentConditionId value
     * @param string $paymentConditionId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByCriteriaRequest
     */
    public function setPaymentConditionId(?string $paymentConditionId = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentConditionId) && !is_string($paymentConditionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentConditionId, true), gettype($paymentConditionId)), __LINE__);
        }
        $this->paymentConditionId = $paymentConditionId;
        
        return $this;
    }
    /**
     * Get travellerType value
     * @return string|null
     */
    public function getTravellerType(): ?string
    {
        return $this->travellerType;
    }
    /**
     * Set travellerType value
     * @param string $travellerType
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByCriteriaRequest
     */
    public function setTravellerType(?string $travellerType = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerType) && !is_string($travellerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerType, true), gettype($travellerType)), __LINE__);
        }
        $this->travellerType = $travellerType;
        
        return $this;
    }
    /**
     * Get connectionTypeId value
     * @return int|null
     */
    public function getConnectionTypeId(): ?int
    {
        return $this->connectionTypeId;
    }
    /**
     * Set connectionTypeId value
     * @param int $connectionTypeId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByCriteriaRequest
     */
    public function setConnectionTypeId(?int $connectionTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($connectionTypeId) && !(is_int($connectionTypeId) || ctype_digit($connectionTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($connectionTypeId, true), gettype($connectionTypeId)), __LINE__);
        }
        $this->connectionTypeId = $connectionTypeId;
        
        return $this;
    }
    /**
     * Get salutationId value
     * @return string|null
     */
    public function getSalutationId(): ?string
    {
        return $this->salutationId;
    }
    /**
     * Set salutationId value
     * @param string $salutationId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByCriteriaRequest
     */
    public function setSalutationId(?string $salutationId = null): self
    {
        // validation for constraint: string
        if (!is_null($salutationId) && !is_string($salutationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutationId, true), gettype($salutationId)), __LINE__);
        }
        $this->salutationId = $salutationId;
        
        return $this;
    }
    /**
     * Get accountNo value
     * @return string|null
     */
    public function getAccountNo(): ?string
    {
        return $this->accountNo;
    }
    /**
     * Set accountNo value
     * @param string $accountNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByCriteriaRequest
     */
    public function setAccountNo(?string $accountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNo) && !is_string($accountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNo, true), gettype($accountNo)), __LINE__);
        }
        $this->accountNo = $accountNo;
        
        return $this;
    }
    /**
     * Get accountType value
     * @return string|null
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }
    /**
     * Set accountType value
     * @param string $accountType
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByCriteriaRequest
     */
    public function setAccountType(?string $accountType = null): self
    {
        // validation for constraint: string
        if (!is_null($accountType) && !is_string($accountType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountType, true), gettype($accountType)), __LINE__);
        }
        $this->accountType = $accountType;
        
        return $this;
    }
    /**
     * Get notDeleted value
     * @return bool|null
     */
    public function getNotDeleted(): ?bool
    {
        return $this->notDeleted;
    }
    /**
     * Set notDeleted value
     * @param bool $notDeleted
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByCriteriaRequest
     */
    public function setNotDeleted(?bool $notDeleted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($notDeleted) && !is_bool($notDeleted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notDeleted, true), gettype($notDeleted)), __LINE__);
        }
        $this->notDeleted = $notDeleted;
        
        return $this;
    }
}

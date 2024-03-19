<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBonusCardsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Filter BonusCards by the name in customer data or the owner field
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBonusCardsRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The BonusCardOwnerForMatching
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BonusCardOwnerForMatching
     * @var \Pggns\MidocoApi\Crmsd\StructType\BonusCardOwnerForMatching|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\BonusCardOwnerForMatching $BonusCardOwnerForMatching = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: The BonusCard type to filter for
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The facesId
     * Meta information extracted from the WSDL
     * - documentation: The BonusCard facesId to filter for
     * @var string|null
     */
    protected ?string $facesId = null;
    /**
     * The cardNo
     * Meta information extracted from the WSDL
     * - documentation: The BonusCard number to filter for
     * @var string|null
     */
    protected ?string $cardNo = null;
    /**
     * The isValid
     * Meta information extracted from the WSDL
     * - documentation: Supply true if you only want BonusCards, that have no, or an incomplete valid date or are still valid. Supply false if you only want BonusCards, that have validMonth and validYear and are still valid / not expired. If this attribute
     * is not set, you will get both. Default: Unset
     * @var bool|null
     */
    protected ?bool $isValid = null;
    /**
     * The isDefault
     * Meta information extracted from the WSDL
     * - documentation: Supply true if you only want the BonusCards marked as default, or false if you want all BonusCard, that are not marked as default. If this attribute is not set, you will get both. Default: Unset
     * @var bool|null
     */
    protected ?bool $isDefault = null;
    /**
     * The hasCustomerData
     * Meta information extracted from the WSDL
     * - documentation: Supply true if you only want the BonusCards, that have customer data, false if you want all BonusCard not having customer data. If this attribute is not set, you will get both. Default: Unset Currently, only cards of type LMM
     * (Lufthansa Miles&More) can have customer data: MidocoMilesAndMoreCustomerData.
     * @var bool|null
     */
    protected ?bool $hasCustomerData = null;
    /**
     * Constructor method for GetBonusCardsRequest
     * @uses GetBonusCardsRequest::setMidocoCustomerId()
     * @uses GetBonusCardsRequest::setBonusCardOwnerForMatching()
     * @uses GetBonusCardsRequest::setType()
     * @uses GetBonusCardsRequest::setFacesId()
     * @uses GetBonusCardsRequest::setCardNo()
     * @uses GetBonusCardsRequest::setIsValid()
     * @uses GetBonusCardsRequest::setIsDefault()
     * @uses GetBonusCardsRequest::setHasCustomerData()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @param \Pggns\MidocoApi\Crmsd\StructType\BonusCardOwnerForMatching $bonusCardOwnerForMatching
     * @param string $type
     * @param string $facesId
     * @param string $cardNo
     * @param bool $isValid
     * @param bool $isDefault
     * @param bool $hasCustomerData
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null, ?\Pggns\MidocoApi\Crmsd\StructType\BonusCardOwnerForMatching $bonusCardOwnerForMatching = null, ?string $type = null, ?string $facesId = null, ?string $cardNo = null, ?bool $isValid = null, ?bool $isDefault = null, ?bool $hasCustomerData = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setBonusCardOwnerForMatching($bonusCardOwnerForMatching)
            ->setType($type)
            ->setFacesId($facesId)
            ->setCardNo($cardNo)
            ->setIsValid($isValid)
            ->setIsDefault($isDefault)
            ->setHasCustomerData($hasCustomerData);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetBonusCardsRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get BonusCardOwnerForMatching value
     * @return \Pggns\MidocoApi\Crmsd\StructType\BonusCardOwnerForMatching|null
     */
    public function getBonusCardOwnerForMatching(): ?\Pggns\MidocoApi\Crmsd\StructType\BonusCardOwnerForMatching
    {
        return $this->BonusCardOwnerForMatching;
    }
    /**
     * Set BonusCardOwnerForMatching value
     * @param \Pggns\MidocoApi\Crmsd\StructType\BonusCardOwnerForMatching $bonusCardOwnerForMatching
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetBonusCardsRequest
     */
    public function setBonusCardOwnerForMatching(?\Pggns\MidocoApi\Crmsd\StructType\BonusCardOwnerForMatching $bonusCardOwnerForMatching = null): self
    {
        $this->BonusCardOwnerForMatching = $bonusCardOwnerForMatching;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetBonusCardsRequest
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get facesId value
     * @return string|null
     */
    public function getFacesId(): ?string
    {
        return $this->facesId;
    }
    /**
     * Set facesId value
     * @param string $facesId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetBonusCardsRequest
     */
    public function setFacesId(?string $facesId = null): self
    {
        // validation for constraint: string
        if (!is_null($facesId) && !is_string($facesId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($facesId, true), gettype($facesId)), __LINE__);
        }
        $this->facesId = $facesId;
        
        return $this;
    }
    /**
     * Get cardNo value
     * @return string|null
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }
    /**
     * Set cardNo value
     * @param string $cardNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetBonusCardsRequest
     */
    public function setCardNo(?string $cardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($cardNo) && !is_string($cardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNo, true), gettype($cardNo)), __LINE__);
        }
        $this->cardNo = $cardNo;
        
        return $this;
    }
    /**
     * Get isValid value
     * @return bool|null
     */
    public function getIsValid(): ?bool
    {
        return $this->isValid;
    }
    /**
     * Set isValid value
     * @param bool $isValid
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetBonusCardsRequest
     */
    public function setIsValid(?bool $isValid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isValid) && !is_bool($isValid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isValid, true), gettype($isValid)), __LINE__);
        }
        $this->isValid = $isValid;
        
        return $this;
    }
    /**
     * Get isDefault value
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }
    /**
     * Set isDefault value
     * @param bool $isDefault
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetBonusCardsRequest
     */
    public function setIsDefault(?bool $isDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDefault) && !is_bool($isDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefault, true), gettype($isDefault)), __LINE__);
        }
        $this->isDefault = $isDefault;
        
        return $this;
    }
    /**
     * Get hasCustomerData value
     * @return bool|null
     */
    public function getHasCustomerData(): ?bool
    {
        return $this->hasCustomerData;
    }
    /**
     * Set hasCustomerData value
     * @param bool $hasCustomerData
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetBonusCardsRequest
     */
    public function setHasCustomerData(?bool $hasCustomerData = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasCustomerData) && !is_bool($hasCustomerData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasCustomerData, true), gettype($hasCustomerData)), __LINE__);
        }
        $this->hasCustomerData = $hasCustomerData;
        
        return $this;
    }
}

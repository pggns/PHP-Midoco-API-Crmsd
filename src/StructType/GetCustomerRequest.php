<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The fetchHistory
     * Meta information extracted from the WSDL
     * - default: true
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $fetchHistory = null;
    /**
     * The withDetails
     * Meta information extracted from the WSDL
     * - default: true
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $withDetails = null;
    /**
     * The calledFromOrder
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $calledFromOrder = null;
    /**
     * The overruleRightCrmDisplayMediator
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $overruleRightCrmDisplayMediator = null;
    /**
     * Constructor method for GetCustomerRequest
     * @uses GetCustomerRequest::setMidocoCustomerId()
     * @uses GetCustomerRequest::setFetchHistory()
     * @uses GetCustomerRequest::setWithDetails()
     * @uses GetCustomerRequest::setCalledFromOrder()
     * @uses GetCustomerRequest::setOverruleRightCrmDisplayMediator()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @param bool $fetchHistory
     * @param bool $withDetails
     * @param bool $calledFromOrder
     * @param bool $overruleRightCrmDisplayMediator
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null, ?bool $fetchHistory = true, ?bool $withDetails = true, ?bool $calledFromOrder = false, ?bool $overruleRightCrmDisplayMediator = false)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setFetchHistory($fetchHistory)
            ->setWithDetails($withDetails)
            ->setCalledFromOrder($calledFromOrder)
            ->setOverruleRightCrmDisplayMediator($overruleRightCrmDisplayMediator);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get fetchHistory value
     * @return bool|null
     */
    public function getFetchHistory(): ?bool
    {
        return $this->fetchHistory;
    }
    /**
     * Set fetchHistory value
     * @param bool $fetchHistory
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerRequest
     */
    public function setFetchHistory(?bool $fetchHistory = true): self
    {
        // validation for constraint: boolean
        if (!is_null($fetchHistory) && !is_bool($fetchHistory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fetchHistory, true), gettype($fetchHistory)), __LINE__);
        }
        $this->fetchHistory = $fetchHistory;
        
        return $this;
    }
    /**
     * Get withDetails value
     * @return bool|null
     */
    public function getWithDetails(): ?bool
    {
        return $this->withDetails;
    }
    /**
     * Set withDetails value
     * @param bool $withDetails
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerRequest
     */
    public function setWithDetails(?bool $withDetails = true): self
    {
        // validation for constraint: boolean
        if (!is_null($withDetails) && !is_bool($withDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($withDetails, true), gettype($withDetails)), __LINE__);
        }
        $this->withDetails = $withDetails;
        
        return $this;
    }
    /**
     * Get calledFromOrder value
     * @return bool|null
     */
    public function getCalledFromOrder(): ?bool
    {
        return $this->calledFromOrder;
    }
    /**
     * Set calledFromOrder value
     * @param bool $calledFromOrder
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerRequest
     */
    public function setCalledFromOrder(?bool $calledFromOrder = false): self
    {
        // validation for constraint: boolean
        if (!is_null($calledFromOrder) && !is_bool($calledFromOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($calledFromOrder, true), gettype($calledFromOrder)), __LINE__);
        }
        $this->calledFromOrder = $calledFromOrder;
        
        return $this;
    }
    /**
     * Get overruleRightCrmDisplayMediator value
     * @return bool|null
     */
    public function getOverruleRightCrmDisplayMediator(): ?bool
    {
        return $this->overruleRightCrmDisplayMediator;
    }
    /**
     * Set overruleRightCrmDisplayMediator value
     * @param bool $overruleRightCrmDisplayMediator
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerRequest
     */
    public function setOverruleRightCrmDisplayMediator(?bool $overruleRightCrmDisplayMediator = false): self
    {
        // validation for constraint: boolean
        if (!is_null($overruleRightCrmDisplayMediator) && !is_bool($overruleRightCrmDisplayMediator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overruleRightCrmDisplayMediator, true), gettype($overruleRightCrmDisplayMediator)), __LINE__);
        }
        $this->overruleRightCrmDisplayMediator = $overruleRightCrmDisplayMediator;
        
        return $this;
    }
}

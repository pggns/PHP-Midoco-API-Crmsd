<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAddressTypeDescriptionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAddressTypeDescriptionsRequest extends AbstractStructBase
{
    /**
     * The addressTypeId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $addressTypeId;
    /**
     * Constructor method for GetAddressTypeDescriptionsRequest
     * @uses GetAddressTypeDescriptionsRequest::setAddressTypeId()
     * @param int $addressTypeId
     */
    public function __construct(int $addressTypeId)
    {
        $this
            ->setAddressTypeId($addressTypeId);
    }
    /**
     * Get addressTypeId value
     * @return int
     */
    public function getAddressTypeId(): int
    {
        return $this->addressTypeId;
    }
    /**
     * Set addressTypeId value
     * @param int $addressTypeId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAddressTypeDescriptionsRequest
     */
    public function setAddressTypeId(int $addressTypeId): self
    {
        // validation for constraint: int
        if (!is_null($addressTypeId) && !(is_int($addressTypeId) || ctype_digit($addressTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressTypeId, true), gettype($addressTypeId)), __LINE__);
        }
        $this->addressTypeId = $addressTypeId;
        
        return $this;
    }
}

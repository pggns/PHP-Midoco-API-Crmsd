<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoAgencyRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoAgencyRequest extends AbstractStructBase
{
    /**
     * The agencyId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $agencyId;
    /**
     * Constructor method for GetMidocoAgencyRequest
     * @uses GetMidocoAgencyRequest::setAgencyId()
     * @param string $agencyId
     */
    public function __construct(string $agencyId)
    {
        $this
            ->setAgencyId($agencyId);
    }
    /**
     * Get agencyId value
     * @return string
     */
    public function getAgencyId(): string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMidocoAgencyRequest
     */
    public function setAgencyId(string $agencyId): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
}

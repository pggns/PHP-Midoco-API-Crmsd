<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoAgencyNumberRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoAgencyNumberRequest extends AbstractStructBase
{
    /**
     * The MidocoAgencyNumber
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencyNumber
     * @var \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO $MidocoAgencyNumber = null;
    /**
     * The action
     * Meta information extracted from the WSDL
     * - default: 0
     * @var int|null
     */
    protected ?int $action = null;
    /**
     * Constructor method for SaveMidocoAgencyNumberRequest
     * @uses SaveMidocoAgencyNumberRequest::setMidocoAgencyNumber()
     * @uses SaveMidocoAgencyNumberRequest::setAction()
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO $midocoAgencyNumber
     * @param int $action
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO $midocoAgencyNumber = null, ?int $action = 0)
    {
        $this
            ->setMidocoAgencyNumber($midocoAgencyNumber)
            ->setAction($action);
    }
    /**
     * Get MidocoAgencyNumber value
     * @return \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO|null
     */
    public function getMidocoAgencyNumber(): ?\Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO
    {
        return $this->MidocoAgencyNumber;
    }
    /**
     * Set MidocoAgencyNumber value
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO $midocoAgencyNumber
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveMidocoAgencyNumberRequest
     */
    public function setMidocoAgencyNumber(?\Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO $midocoAgencyNumber = null): self
    {
        $this->MidocoAgencyNumber = $midocoAgencyNumber;
        
        return $this;
    }
    /**
     * Get action value
     * @return int|null
     */
    public function getAction(): ?int
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param int $action
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveMidocoAgencyNumberRequest
     */
    public function setAction(?int $action = 0): self
    {
        // validation for constraint: int
        if (!is_null($action) && !(is_int($action) || ctype_digit($action))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->action = $action;
        
        return $this;
    }
}

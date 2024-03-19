<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCreditorRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCreditorRequest extends AbstractStructBase
{
    /**
     * The creditorNo
     * @var string|null
     */
    protected ?string $creditorNo = null;
    /**
     * Constructor method for DeleteCreditorRequest
     * @uses DeleteCreditorRequest::setCreditorNo()
     * @param string $creditorNo
     */
    public function __construct(?string $creditorNo = null)
    {
        $this
            ->setCreditorNo($creditorNo);
    }
    /**
     * Get creditorNo value
     * @return string|null
     */
    public function getCreditorNo(): ?string
    {
        return $this->creditorNo;
    }
    /**
     * Set creditorNo value
     * @param string $creditorNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCreditorRequest
     */
    public function setCreditorNo(?string $creditorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($creditorNo) && !is_string($creditorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditorNo, true), gettype($creditorNo)), __LINE__);
        }
        $this->creditorNo = $creditorNo;
        
        return $this;
    }
}

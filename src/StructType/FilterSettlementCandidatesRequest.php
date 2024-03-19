<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FilterSettlementCandidatesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FilterSettlementCandidatesRequest extends AbstractStructBase
{
    /**
     * The settlementMonth
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $settlementMonth;
    /**
     * Constructor method for FilterSettlementCandidatesRequest
     * @uses FilterSettlementCandidatesRequest::setSettlementMonth()
     * @param string $settlementMonth
     */
    public function __construct(string $settlementMonth)
    {
        $this
            ->setSettlementMonth($settlementMonth);
    }
    /**
     * Get settlementMonth value
     * @return string
     */
    public function getSettlementMonth(): string
    {
        return $this->settlementMonth;
    }
    /**
     * Set settlementMonth value
     * @param string $settlementMonth
     * @return \Pggns\MidocoApi\Crmsd\StructType\FilterSettlementCandidatesRequest
     */
    public function setSettlementMonth(string $settlementMonth): self
    {
        // validation for constraint: string
        if (!is_null($settlementMonth) && !is_string($settlementMonth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementMonth, true), gettype($settlementMonth)), __LINE__);
        }
        $this->settlementMonth = $settlementMonth;
        
        return $this;
    }
}

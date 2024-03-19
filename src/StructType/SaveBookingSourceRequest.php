<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBookingSourceRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBookingSourceRequest extends AbstractStructBase
{
    /**
     * The MidocoBookingSource
     * Meta information extracted from the WSDL
     * - ref: MidocoBookingSource
     * @var \Pggns\MidocoApi\Crmsd\StructType\BookingSourceDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\BookingSourceDTO $MidocoBookingSource = null;
    /**
     * Constructor method for SaveBookingSourceRequest
     * @uses SaveBookingSourceRequest::setMidocoBookingSource()
     * @param \Pggns\MidocoApi\Crmsd\StructType\BookingSourceDTO $midocoBookingSource
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\BookingSourceDTO $midocoBookingSource = null)
    {
        $this
            ->setMidocoBookingSource($midocoBookingSource);
    }
    /**
     * Get MidocoBookingSource value
     * @return \Pggns\MidocoApi\Crmsd\StructType\BookingSourceDTO|null
     */
    public function getMidocoBookingSource(): ?\Pggns\MidocoApi\Crmsd\StructType\BookingSourceDTO
    {
        return $this->MidocoBookingSource;
    }
    /**
     * Set MidocoBookingSource value
     * @param \Pggns\MidocoApi\Crmsd\StructType\BookingSourceDTO $midocoBookingSource
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveBookingSourceRequest
     */
    public function setMidocoBookingSource(?\Pggns\MidocoApi\Crmsd\StructType\BookingSourceDTO $midocoBookingSource = null): self
    {
        $this->MidocoBookingSource = $midocoBookingSource;
        
        return $this;
    }
}

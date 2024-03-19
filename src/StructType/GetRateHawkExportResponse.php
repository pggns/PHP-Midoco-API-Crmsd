<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRateHawkExportResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetRateHawkExportResponse extends AbstractStructBase
{
    /**
     * The requestUrl
     * @var string|null
     */
    protected ?string $requestUrl = null;
    /**
     * Constructor method for GetRateHawkExportResponse
     * @uses GetRateHawkExportResponse::setRequestUrl()
     * @param string $requestUrl
     */
    public function __construct(?string $requestUrl = null)
    {
        $this
            ->setRequestUrl($requestUrl);
    }
    /**
     * Get requestUrl value
     * @return string|null
     */
    public function getRequestUrl(): ?string
    {
        return $this->requestUrl;
    }
    /**
     * Set requestUrl value
     * @param string $requestUrl
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetRateHawkExportResponse
     */
    public function setRequestUrl(?string $requestUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($requestUrl) && !is_string($requestUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestUrl, true), gettype($requestUrl)), __LINE__);
        }
        $this->requestUrl = $requestUrl;
        
        return $this;
    }
}

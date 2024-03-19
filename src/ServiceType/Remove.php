<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Remove ServiceType
 * @subpackage Services
 */
class Remove extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Crmsd\ServiceType\Remove
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named removeCriteriaTypesFromCategory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\RemoveCriteriaTypesFromCategoryRequest $paramRemoveCriteriaTypesFromCategoryRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\RemoveCriteriaTypesFromCategoryResponse|bool
     */
    public function removeCriteriaTypesFromCategory(\Pggns\MidocoApi\Crmsd\StructType\RemoveCriteriaTypesFromCategoryRequest $paramRemoveCriteriaTypesFromCategoryRequest)
    {
        try {
            $this->setResult($resultRemoveCriteriaTypesFromCategory = $this->getSoapClient()->__soapCall('removeCriteriaTypesFromCategory', [
                $paramRemoveCriteriaTypesFromCategoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveCriteriaTypesFromCategory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crmsd\StructType\RemoveCriteriaTypesFromCategoryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

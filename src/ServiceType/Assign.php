<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Assign ServiceType
 * @subpackage Services
 */
class Assign extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Crmsd\ServiceType\Assign
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named assignCriteriaTypesToCategory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\AssignCriteriaTypesToCategoryRequest $paramAssignCriteriaTypesToCategoryRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\AssignCriteriaTypesToCategoryResponse|bool
     */
    public function assignCriteriaTypesToCategory(\Pggns\MidocoApi\Crmsd\StructType\AssignCriteriaTypesToCategoryRequest $paramAssignCriteriaTypesToCategoryRequest)
    {
        try {
            $this->setResult($resultAssignCriteriaTypesToCategory = $this->getSoapClient()->__soapCall('assignCriteriaTypesToCategory', [
                $paramAssignCriteriaTypesToCategoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAssignCriteriaTypesToCategory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crmsd\StructType\AssignCriteriaTypesToCategoryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

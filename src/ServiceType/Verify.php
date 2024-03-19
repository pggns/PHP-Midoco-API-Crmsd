<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Verify ServiceType
 * @subpackage Services
 */
class Verify extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Crmsd\ServiceType\Verify
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named verifyDictionaryNames
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\VerifyDictionaryNamesRequest $paramVerifyDictionaryNamesRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\VerifyDictionaryNamesResponse|bool
     */
    public function verifyDictionaryNames(\Pggns\MidocoApi\Crmsd\StructType\VerifyDictionaryNamesRequest $paramVerifyDictionaryNamesRequest)
    {
        try {
            $this->setResult($resultVerifyDictionaryNames = $this->getSoapClient()->__soapCall('verifyDictionaryNames', [
                $paramVerifyDictionaryNamesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVerifyDictionaryNames;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crmsd\StructType\VerifyDictionaryNamesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

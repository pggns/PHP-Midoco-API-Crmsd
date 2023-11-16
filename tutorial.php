<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/CrmsdService.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/CrmsdService.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Pggns\MidocoApi\Crmsd\ClassMap::get(),
];
/**
 * Samples for Load ServiceType
 */
$load = new \Pggns\MidocoApi\Crmsd\ServiceType\Load($options);
$load->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for loadTypeValuesAndDescriptions operation/method
 */
if ($load->loadTypeValuesAndDescriptions(new \Pggns\MidocoApi\Crmsd\StructType\GetTypeValuesAndDescriptionsRequest()) !== false) {
    print_r($load->getResult());
} else {
    print_r($load->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Pggns\MidocoApi\Crmsd\ServiceType\Get($options);
$get->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for getExternalSystemTypes operation/method
 */
if ($get->getExternalSystemTypes(new \Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemTypesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExternalSystemAttributes operation/method
 */
if ($get->getExternalSystemAttributes(new \Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemAttributesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExternalSystems operation/method
 */
if ($get->getExternalSystems(new \Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllCrmCriteriaDescriptions operation/method
 */
if ($get->getAllCrmCriteriaDescriptions(new \Pggns\MidocoApi\Crmsd\StructType\GetAllCrmCriteriaDescriptionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getInvoiceFileFormat operation/method
 */
if ($get->getInvoiceFileFormat(new \Pggns\MidocoApi\Crmsd\StructType\GetInvoiceFileFormatRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDebitCardTypes operation/method
 */
if ($get->getDebitCardTypes(new \Pggns\MidocoApi\Crmsd\StructType\GetDebitCardTypesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getJobFunction operation/method
 */
if ($get->getJobFunction(new \Pggns\MidocoApi\Crmsd\StructType\GetJobFunctionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCommissionDefinitions operation/method
 */
if ($get->getCommissionDefinitions(new \Pggns\MidocoApi\Crmsd\StructType\GetCommissionDefinitionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCommissionDefinitionLevel operation/method
 */
if ($get->getCommissionDefinitionLevel(new \Pggns\MidocoApi\Crmsd\StructType\GetCommissionDefinitionLevelsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCrmPersonTravellerTypeDescriptions operation/method
 */
if ($get->getCrmPersonTravellerTypeDescriptions(new \Pggns\MidocoApi\Crmsd\StructType\GetCrmPersonTravellerTypeDescriptionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCriteriaTypeCategoryDescriptions operation/method
 */
if ($get->getCriteriaTypeCategoryDescriptions(new \Pggns\MidocoApi\Crmsd\StructType\GetCriteriaTypeCategoryDescriptionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCriteriaTypesForCategory operation/method
 */
if ($get->getCriteriaTypesForCategory(new \Pggns\MidocoApi\Crmsd\StructType\GetCriteriaTypesForCategoryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPaymentConditions operation/method
 */
if ($get->getPaymentConditions(new \Pggns\MidocoApi\Crmsd\StructType\GetPaymentConditionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCrmPersonTravellerMaritalStatusDescriptions operation/method
 */
if ($get->getCrmPersonTravellerMaritalStatusDescriptions(new \Pggns\MidocoApi\Crmsd\StructType\GetCrmPersonTravellerMaritalStatusDescriptionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDictionaryName operation/method
 */
if ($get->getDictionaryName(new \Pggns\MidocoApi\Crmsd\StructType\GetDictionaryNameRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLetterTemplates operation/method
 */
if ($get->getLetterTemplates(new \Pggns\MidocoApi\Crmsd\StructType\GetLetterTemplatesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBookingSources operation/method
 */
if ($get->getBookingSources(new \Pggns\MidocoApi\Crmsd\StructType\GetBookingSourcesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTextTemplateType operation/method
 */
if ($get->getTextTemplateType(new \Pggns\MidocoApi\Crmsd\StructType\GetTextTemplateTypeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllTextTemplateTypes operation/method
 */
if ($get->getAllTextTemplateTypes(new \Pggns\MidocoApi\Crmsd\StructType\GetAllTextTemplateTypesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllPersonTitles operation/method
 */
if ($get->getAllPersonTitles(new \Pggns\MidocoApi\Crmsd\StructType\GetTitlesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDeleteReasons4Customer operation/method
 */
if ($get->getDeleteReasons4Customer(new \Pggns\MidocoApi\Crmsd\StructType\GetDeleteReasons4CustomerRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getConsent operation/method
 */
if ($get->getConsent(new \Pggns\MidocoApi\Crmsd\StructType\GetConsentRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getActualConsent operation/method
 */
if ($get->getActualConsent(new \Pggns\MidocoApi\Crmsd\StructType\GetActualConsentRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getConsentUnits operation/method
 */
if ($get->getConsentUnits(new \Pggns\MidocoApi\Crmsd\StructType\GetConsentUnitsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSubjectElements operation/method
 */
if ($get->getSubjectElements(new \Pggns\MidocoApi\Crmsd\StructType\GetSubjectElementsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Save ServiceType
 */
$save = new \Pggns\MidocoApi\Crmsd\ServiceType\Save($options);
$save->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for saveExternalSystem operation/method
 */
if ($save->saveExternalSystem(new \Pggns\MidocoApi\Crmsd\StructType\SaveExternalSystemRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveExternalSystemAttributeAttribute operation/method
 */
if ($save->saveExternalSystemAttributeAttribute(new \Pggns\MidocoApi\Crmsd\StructType\SaveExternalSystemAttributeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveInvoiceFileFormat operation/method
 */
if ($save->saveInvoiceFileFormat(new \Pggns\MidocoApi\Crmsd\StructType\SaveInvoiceFileFormatRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveDebitCardType operation/method
 */
if ($save->saveDebitCardType(new \Pggns\MidocoApi\Crmsd\StructType\SaveDebitCardTypeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveJobFunction operation/method
 */
if ($save->saveJobFunction(new \Pggns\MidocoApi\Crmsd\StructType\SaveJobFunctionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCommissionDefinition operation/method
 */
if ($save->saveCommissionDefinition(new \Pggns\MidocoApi\Crmsd\StructType\SaveCommissionDefinitionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCommissionDefinitionLevel operation/method
 */
if ($save->saveCommissionDefinitionLevel(new \Pggns\MidocoApi\Crmsd\StructType\SaveCommissionDefinitionLevelRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCriteriaTypeCategoryDescription operation/method
 */
if ($save->saveCriteriaTypeCategoryDescription(new \Pggns\MidocoApi\Crmsd\StructType\SaveCriteriaTypeCategoryDescriptionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCriteriaTypeCategory operation/method
 */
if ($save->saveCriteriaTypeCategory(new \Pggns\MidocoApi\Crmsd\StructType\SaveCriteriaTypeCategoryRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveDictionaryName operation/method
 */
if ($save->saveDictionaryName(new \Pggns\MidocoApi\Crmsd\StructType\SaveDictionaryNameRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBookingSource operation/method
 */
if ($save->saveBookingSource(new \Pggns\MidocoApi\Crmsd\StructType\SaveBookingSourceRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveTextTemplateType operation/method
 */
if ($save->saveTextTemplateType(new \Pggns\MidocoApi\Crmsd\StructType\SaveTextTemplateTypeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for savePersonTitle operation/method
 */
if ($save->savePersonTitle(new \Pggns\MidocoApi\Crmsd\StructType\SavePersonTitleRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveConsent operation/method
 */
if ($save->saveConsent(new \Pggns\MidocoApi\Crmsd\StructType\SaveConsentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveConsentUnits operation/method
 */
if ($save->saveConsentUnits(new \Pggns\MidocoApi\Crmsd\StructType\SaveConsentUnitsRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Pggns\MidocoApi\Crmsd\ServiceType\Delete($options);
$delete->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for deleteExternalSystem operation/method
 */
if ($delete->deleteExternalSystem(new \Pggns\MidocoApi\Crmsd\StructType\DeleteExternalSystemRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteExternalSystemAttribute operation/method
 */
if ($delete->deleteExternalSystemAttribute(new \Pggns\MidocoApi\Crmsd\StructType\DeleteExternalSystemAttributeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteInvoiceFileFormat operation/method
 */
if ($delete->deleteInvoiceFileFormat(new \Pggns\MidocoApi\Crmsd\StructType\DeleteInvoiceFileFormatRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteDebitCardType operation/method
 */
if ($delete->deleteDebitCardType(new \Pggns\MidocoApi\Crmsd\StructType\DeleteDebitCardTypeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteJobFunction operation/method
 */
if ($delete->deleteJobFunction(new \Pggns\MidocoApi\Crmsd\StructType\DeleteJobFunctionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCommissionDefinition operation/method
 */
if ($delete->deleteCommissionDefinition(new \Pggns\MidocoApi\Crmsd\StructType\DeleteCommissionDefinitionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCommissionDefinitionLevel operation/method
 */
if ($delete->deleteCommissionDefinitionLevel(new \Pggns\MidocoApi\Crmsd\StructType\DeleteCommissionDefinitionLevelRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCriteriaTypeCategoryDescription operation/method
 */
if ($delete->deleteCriteriaTypeCategoryDescription(new \Pggns\MidocoApi\Crmsd\StructType\DeleteCriteriaTypeCategoryDescriptionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCriteriaTypeCategory operation/method
 */
if ($delete->deleteCriteriaTypeCategory(new \Pggns\MidocoApi\Crmsd\StructType\DeleteCriteriaTypeCategoryRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deletePaymentCondition operation/method
 */
if ($delete->deletePaymentCondition(new \Pggns\MidocoApi\Crmsd\StructType\DeletePaymentConditionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteDictionaryName operation/method
 */
if ($delete->deleteDictionaryName(new \Pggns\MidocoApi\Crmsd\StructType\DeleteDictionaryNameRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteLetterTemplate operation/method
 */
if ($delete->deleteLetterTemplate(new \Pggns\MidocoApi\Crmsd\StructType\DeleteLetterTemplateRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBookingSource operation/method
 */
if ($delete->deleteBookingSource(new \Pggns\MidocoApi\Crmsd\StructType\DeleteBookingSourceRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteTextTemplateType operation/method
 */
if ($delete->deleteTextTemplateType(new \Pggns\MidocoApi\Crmsd\StructType\DeleteTextTemplateTypeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deletePersonTitle operation/method
 */
if ($delete->deletePersonTitle(new \Pggns\MidocoApi\Crmsd\StructType\DeletePersonTitleRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteConsent operation/method
 */
if ($delete->deleteConsent(new \Pggns\MidocoApi\Crmsd\StructType\DeleteConsentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteConsentUnits operation/method
 */
if ($delete->deleteConsentUnits(new \Pggns\MidocoApi\Crmsd\StructType\DeleteConsentUnitsRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for List ServiceType
 */
$list = new \Pggns\MidocoApi\Crmsd\ServiceType\_List($options);
$list->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for listCriteriaTypeCategories operation/method
 */
if ($list->listCriteriaTypeCategories(new \Pggns\MidocoApi\Crmsd\StructType\ListCriteriaTypeCategoriesRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Samples for Assign ServiceType
 */
$assign = new \Pggns\MidocoApi\Crmsd\ServiceType\Assign($options);
$assign->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for assignCriteriaTypesToCategory operation/method
 */
if ($assign->assignCriteriaTypesToCategory(new \Pggns\MidocoApi\Crmsd\StructType\AssignCriteriaTypesToCategoryRequest()) !== false) {
    print_r($assign->getResult());
} else {
    print_r($assign->getLastError());
}
/**
 * Samples for Remove ServiceType
 */
$remove = new \Pggns\MidocoApi\Crmsd\ServiceType\Remove($options);
$remove->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for removeCriteriaTypesFromCategory operation/method
 */
if ($remove->removeCriteriaTypesFromCategory(new \Pggns\MidocoApi\Crmsd\StructType\RemoveCriteriaTypesFromCategoryRequest()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Samples for Import ServiceType
 */
$import = new \Pggns\MidocoApi\Crmsd\ServiceType\Import($options);
$import->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for importDictionaryNames operation/method
 */
if ($import->importDictionaryNames(new \Pggns\MidocoApi\Crmsd\StructType\ImportDictionaryNamesRequest()) !== false) {
    print_r($import->getResult());
} else {
    print_r($import->getLastError());
}
/**
 * Samples for Verify ServiceType
 */
$verify = new \Pggns\MidocoApi\Crmsd\ServiceType\Verify($options);
$verify->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for verifyDictionaryNames operation/method
 */
if ($verify->verifyDictionaryNames(new \Pggns\MidocoApi\Crmsd\StructType\VerifyDictionaryNamesRequest()) !== false) {
    print_r($verify->getResult());
} else {
    print_r($verify->getLastError());
}
/**
 * Samples for Actualize ServiceType
 */
$actualize = new \Pggns\MidocoApi\Crmsd\ServiceType\Actualize($options);
$actualize->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for actualizeCustomerContactData operation/method
 */
if ($actualize->actualizeCustomerContactData(new \Pggns\MidocoApi\Crmsd\StructType\ActualizeCustomerContactDataRequest()) !== false) {
    print_r($actualize->getResult());
} else {
    print_r($actualize->getLastError());
}

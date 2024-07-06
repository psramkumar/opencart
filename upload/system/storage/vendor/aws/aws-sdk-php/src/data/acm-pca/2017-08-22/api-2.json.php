<?php
// This file was auto-generated from sdk-root/src/data/acm-pca/2017-08-22/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-08-22', 'endpointPrefix' => 'acm-pca', 'jsonVersion' => '1.1', 'protocol' => 'json', 'protocols' => [ 'json', ], 'serviceAbbreviation' => 'ACM-PCA', 'serviceFullName' => 'AWS Certificate Manager Private Certificate Authority', 'serviceId' => 'ACM PCA', 'signatureVersion' => 'v4', 'targetPrefix' => 'ACMPrivateCA', 'uid' => 'acm-pca-2017-08-22', 'auth' => [ 'aws.auth#sigv4', ], ], 'operations' => [ 'CreateCertificateAuthority' => [ 'name' => 'CreateCertificateAuthority', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateCertificateAuthorityRequest', ], 'output' => [ 'shape' => 'CreateCertificateAuthorityResponse', ], 'errors' => [ [ 'shape' => 'InvalidArgsException', ], [ 'shape' => 'InvalidPolicyException', ], [ 'shape' => 'InvalidTagException', ], [ 'shape' => 'LimitExceededException', ], ], 'idempotent' => true, ], 'CreateCertificateAuthorityAuditReport' => [ 'name' => 'CreateCertificateAuthorityAuditReport', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateCertificateAuthorityAuditReportRequest', ], 'output' => [ 'shape' => 'CreateCertificateAuthorityAuditReportResponse', ], 'errors' => [ [ 'shape' => 'RequestInProgressException', ], [ 'shape' => 'RequestFailedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidArgsException', ], [ 'shape' => 'InvalidStateException', ], ], 'idempotent' => true, ], 'CreatePermission' => [ 'name' => 'CreatePermission', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreatePermissionRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'PermissionAlreadyExistsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'RequestFailedException', ], ], ], 'DeleteCertificateAuthority' => [ 'name' => 'DeleteCertificateAuthority', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteCertificateAuthorityRequest', ], 'errors' => [ [ 'shape' => 'ConcurrentModificationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidStateException', ], ], ], 'DeletePermission' => [ 'name' => 'DeletePermission', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeletePermissionRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'RequestFailedException', ], ], ], 'DeletePolicy' => [ 'name' => 'DeletePolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeletePolicyRequest', ], 'errors' => [ [ 'shape' => 'ConcurrentModificationException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'LockoutPreventedException', ], [ 'shape' => 'RequestFailedException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DescribeCertificateAuthority' => [ 'name' => 'DescribeCertificateAuthority', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeCertificateAuthorityRequest', ], 'output' => [ 'shape' => 'DescribeCertificateAuthorityResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], ], ], 'DescribeCertificateAuthorityAuditReport' => [ 'name' => 'DescribeCertificateAuthorityAuditReport', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeCertificateAuthorityAuditReportRequest', ], 'output' => [ 'shape' => 'DescribeCertificateAuthorityAuditReportResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidArgsException', ], ], ], 'GetCertificate' => [ 'name' => 'GetCertificate', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetCertificateRequest', ], 'output' => [ 'shape' => 'GetCertificateResponse', ], 'errors' => [ [ 'shape' => 'RequestInProgressException', ], [ 'shape' => 'RequestFailedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidStateException', ], ], ], 'GetCertificateAuthorityCertificate' => [ 'name' => 'GetCertificateAuthorityCertificate', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetCertificateAuthorityCertificateRequest', ], 'output' => [ 'shape' => 'GetCertificateAuthorityCertificateResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'InvalidArnException', ], ], ], 'GetCertificateAuthorityCsr' => [ 'name' => 'GetCertificateAuthorityCsr', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetCertificateAuthorityCsrRequest', ], 'output' => [ 'shape' => 'GetCertificateAuthorityCsrResponse', ], 'errors' => [ [ 'shape' => 'RequestInProgressException', ], [ 'shape' => 'RequestFailedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidStateException', ], ], ], 'GetPolicy' => [ 'name' => 'GetPolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetPolicyRequest', ], 'output' => [ 'shape' => 'GetPolicyResponse', ], 'errors' => [ [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'RequestFailedException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ImportCertificateAuthorityCertificate' => [ 'name' => 'ImportCertificateAuthorityCertificate', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ImportCertificateAuthorityCertificateRequest', ], 'errors' => [ [ 'shape' => 'ConcurrentModificationException', ], [ 'shape' => 'RequestInProgressException', ], [ 'shape' => 'RequestFailedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'MalformedCertificateException', ], [ 'shape' => 'CertificateMismatchException', ], ], ], 'IssueCertificate' => [ 'name' => 'IssueCertificate', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'IssueCertificateRequest', ], 'output' => [ 'shape' => 'IssueCertificateResponse', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidArgsException', ], [ 'shape' => 'MalformedCSRException', ], ], 'idempotent' => true, ], 'ListCertificateAuthorities' => [ 'name' => 'ListCertificateAuthorities', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListCertificateAuthoritiesRequest', ], 'output' => [ 'shape' => 'ListCertificateAuthoritiesResponse', ], 'errors' => [ [ 'shape' => 'InvalidNextTokenException', ], ], ], 'ListPermissions' => [ 'name' => 'ListPermissions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListPermissionsRequest', ], 'output' => [ 'shape' => 'ListPermissionsResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'RequestFailedException', ], ], ], 'ListTags' => [ 'name' => 'ListTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsRequest', ], 'output' => [ 'shape' => 'ListTagsResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidStateException', ], ], ], 'PutPolicy' => [ 'name' => 'PutPolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutPolicyRequest', ], 'errors' => [ [ 'shape' => 'ConcurrentModificationException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'InvalidPolicyException', ], [ 'shape' => 'LockoutPreventedException', ], [ 'shape' => 'RequestFailedException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'RestoreCertificateAuthority' => [ 'name' => 'RestoreCertificateAuthority', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RestoreCertificateAuthorityRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'InvalidArnException', ], ], ], 'RevokeCertificate' => [ 'name' => 'RevokeCertificate', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RevokeCertificateRequest', ], 'errors' => [ [ 'shape' => 'ConcurrentModificationException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'RequestAlreadyProcessedException', ], [ 'shape' => 'RequestInProgressException', ], [ 'shape' => 'RequestFailedException', ], ], ], 'TagCertificateAuthority' => [ 'name' => 'TagCertificateAuthority', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TagCertificateAuthorityRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'InvalidTagException', ], [ 'shape' => 'TooManyTagsException', ], ], ], 'UntagCertificateAuthority' => [ 'name' => 'UntagCertificateAuthority', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UntagCertificateAuthorityRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'InvalidTagException', ], ], ], 'UpdateCertificateAuthority' => [ 'name' => 'UpdateCertificateAuthority', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateCertificateAuthorityRequest', ], 'errors' => [ [ 'shape' => 'ConcurrentModificationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArgsException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'InvalidPolicyException', ], ], ], ], 'shapes' => [ 'ASN1PrintableString64' => [ 'type' => 'string', 'max' => 64, 'min' => 0, 'pattern' => '[a-zA-Z0-9\'()+-.?:/= ]*', ], 'ASN1Subject' => [ 'type' => 'structure', 'members' => [ 'Country' => [ 'shape' => 'CountryCodeString', ], 'Organization' => [ 'shape' => 'String64', ], 'OrganizationalUnit' => [ 'shape' => 'String64', ], 'DistinguishedNameQualifier' => [ 'shape' => 'ASN1PrintableString64', ], 'State' => [ 'shape' => 'String128', ], 'CommonName' => [ 'shape' => 'String64', ], 'SerialNumber' => [ 'shape' => 'ASN1PrintableString64', ], 'Locality' => [ 'shape' => 'String128', ], 'Title' => [ 'shape' => 'String64', ], 'Surname' => [ 'shape' => 'String40', ], 'GivenName' => [ 'shape' => 'String16', ], 'Initials' => [ 'shape' => 'String5', ], 'Pseudonym' => [ 'shape' => 'String128', ], 'GenerationQualifier' => [ 'shape' => 'String3', ], 'CustomAttributes' => [ 'shape' => 'CustomAttributeList', ], ], ], 'AWSPolicy' => [ 'type' => 'string', 'max' => 20480, 'min' => 1, 'pattern' => '[\\u0009\\u000A\\u000D\\u0020-\\u00FF]+', ], 'AccessDescription' => [ 'type' => 'structure', 'required' => [ 'AccessMethod', 'AccessLocation', ], 'members' => [ 'AccessMethod' => [ 'shape' => 'AccessMethod', ], 'AccessLocation' => [ 'shape' => 'GeneralName', ], ], 'box' => true, ], 'AccessDescriptionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccessDescription', ], ], 'AccessMethod' => [ 'type' => 'structure', 'members' => [ 'CustomObjectIdentifier' => [ 'shape' => 'CustomObjectIdentifier', ], 'AccessMethodType' => [ 'shape' => 'AccessMethodType', ], ], ], 'AccessMethodType' => [ 'type' => 'string', 'enum' => [ 'CA_REPOSITORY', 'RESOURCE_PKI_MANIFEST', 'RESOURCE_PKI_NOTIFY', ], ], 'AccountId' => [ 'type' => 'string', 'max' => 12, 'min' => 12, 'pattern' => '[0-9]+', ], 'ActionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ActionType', ], 'max' => 3, 'min' => 1, ], 'ActionType' => [ 'type' => 'string', 'enum' => [ 'IssueCertificate', 'GetCertificate', 'ListPermissions', ], ], 'ApiPassthrough' => [ 'type' => 'structure', 'members' => [ 'Extensions' => [ 'shape' => 'Extensions', ], 'Subject' => [ 'shape' => 'ASN1Subject', ], ], ], 'Arn' => [ 'type' => 'string', 'max' => 200, 'min' => 5, 'pattern' => 'arn:[\\w+=/,.@-]+:acm-pca:[\\w+=/,.@-]*:[0-9]*:[\\w+=,.@-]+(/[\\w+=,.@-]+)*', ], 'AuditReportId' => [ 'type' => 'string', 'max' => 36, 'min' => 36, 'pattern' => '[a-z0-9]{8}-[a-z0-9]{4}-[a-z0-9]{4}-[a-z0-9]{4}-[a-z0-9]{12}', ], 'AuditReportResponseFormat' => [ 'type' => 'string', 'enum' => [ 'JSON', 'CSV', ], ], 'AuditReportStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'SUCCESS', 'FAILED', ], ], 'Base64String1To4096' => [ 'type' => 'string', 'max' => 4096, 'min' => 1, 'pattern' => '^(?:[A-Za-z0-9+/]{4})*(?:[A-Za-z0-9+/]{2}==|[A-Za-z0-9+/]{3}=)?$', ], 'Boolean' => [ 'type' => 'boolean', ], 'CertificateAuthorities' => [ 'type' => 'list', 'member' => [ 'shape' => 'CertificateAuthority', ], ], 'CertificateAuthority' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'Arn', ], 'OwnerAccount' => [ 'shape' => 'AccountId', ], 'CreatedAt' => [ 'shape' => 'TStamp', ], 'LastStateChangeAt' => [ 'shape' => 'TStamp', ], 'Type' => [ 'shape' => 'CertificateAuthorityType', ], 'Serial' => [ 'shape' => 'String', ], 'Status' => [ 'shape' => 'CertificateAuthorityStatus', ], 'NotBefore' => [ 'shape' => 'TStamp', ], 'NotAfter' => [ 'shape' => 'TStamp', ], 'FailureReason' => [ 'shape' => 'FailureReason', ], 'CertificateAuthorityConfiguration' => [ 'shape' => 'CertificateAuthorityConfiguration', ], 'RevocationConfiguration' => [ 'shape' => 'RevocationConfiguration', ], 'RestorableUntil' => [ 'shape' => 'TStamp', ], 'KeyStorageSecurityStandard' => [ 'shape' => 'KeyStorageSecurityStandard', ], 'UsageMode' => [ 'shape' => 'CertificateAuthorityUsageMode', ], ], ], 'CertificateAuthorityConfiguration' => [ 'type' => 'structure', 'required' => [ 'KeyAlgorithm', 'SigningAlgorithm', 'Subject', ], 'members' => [ 'KeyAlgorithm' => [ 'shape' => 'KeyAlgorithm', ], 'SigningAlgorithm' => [ 'shape' => 'SigningAlgorithm', ], 'Subject' => [ 'shape' => 'ASN1Subject', ], 'CsrExtensions' => [ 'shape' => 'CsrExtensions', ], ], ], 'CertificateAuthorityStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'PENDING_CERTIFICATE', 'ACTIVE', 'DELETED', 'DISABLED', 'EXPIRED', 'FAILED', ], ], 'CertificateAuthorityType' => [ 'type' => 'string', 'enum' => [ 'ROOT', 'SUBORDINATE', ], ], 'CertificateAuthorityUsageMode' => [ 'type' => 'string', 'enum' => [ 'GENERAL_PURPOSE', 'SHORT_LIVED_CERTIFICATE', ], ], 'CertificateBody' => [ 'type' => 'string', ], 'CertificateBodyBlob' => [ 'type' => 'blob', 'max' => 32768, 'min' => 1, ], 'CertificateChain' => [ 'type' => 'string', ], 'CertificateChainBlob' => [ 'type' => 'blob', 'max' => 2097152, 'min' => 0, ], 'CertificateMismatchException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'CertificatePolicyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PolicyInformation', ], 'max' => 20, 'min' => 1, ], 'CnameString' => [ 'type' => 'string', 'max' => 253, 'min' => 0, 'pattern' => '^[-a-zA-Z0-9;/?:@&=+$,%_.!~*()\']*$', ], 'ConcurrentModificationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'CountryCodeString' => [ 'type' => 'string', 'max' => 2, 'min' => 2, 'pattern' => '[A-Za-z]{2}', ], 'CreateCertificateAuthorityAuditReportRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', 'S3BucketName', 'AuditReportResponseFormat', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], 'S3BucketName' => [ 'shape' => 'S3BucketName', ], 'AuditReportResponseFormat' => [ 'shape' => 'AuditReportResponseFormat', ], ], ], 'CreateCertificateAuthorityAuditReportResponse' => [ 'type' => 'structure', 'members' => [ 'AuditReportId' => [ 'shape' => 'AuditReportId', ], 'S3Key' => [ 'shape' => 'S3Key', ], ], ], 'CreateCertificateAuthorityRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityConfiguration', 'CertificateAuthorityType', ], 'members' => [ 'CertificateAuthorityConfiguration' => [ 'shape' => 'CertificateAuthorityConfiguration', ], 'RevocationConfiguration' => [ 'shape' => 'RevocationConfiguration', ], 'CertificateAuthorityType' => [ 'shape' => 'CertificateAuthorityType', ], 'IdempotencyToken' => [ 'shape' => 'IdempotencyToken', ], 'KeyStorageSecurityStandard' => [ 'shape' => 'KeyStorageSecurityStandard', ], 'Tags' => [ 'shape' => 'TagList', ], 'UsageMode' => [ 'shape' => 'CertificateAuthorityUsageMode', ], ], ], 'CreateCertificateAuthorityResponse' => [ 'type' => 'structure', 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], ], ], 'CreatePermissionRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', 'Principal', 'Actions', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], 'Principal' => [ 'shape' => 'Principal', ], 'SourceAccount' => [ 'shape' => 'AccountId', ], 'Actions' => [ 'shape' => 'ActionList', ], ], ], 'CrlConfiguration' => [ 'type' => 'structure', 'required' => [ 'Enabled', ], 'members' => [ 'Enabled' => [ 'shape' => 'Boolean', 'box' => true, ], 'ExpirationInDays' => [ 'shape' => 'Integer1To5000', 'box' => true, ], 'CustomCname' => [ 'shape' => 'CnameString', ], 'S3BucketName' => [ 'shape' => 'S3BucketName3To255', ], 'S3ObjectAcl' => [ 'shape' => 'S3ObjectAcl', ], 'CrlDistributionPointExtensionConfiguration' => [ 'shape' => 'CrlDistributionPointExtensionConfiguration', ], ], ], 'CrlDistributionPointExtensionConfiguration' => [ 'type' => 'structure', 'required' => [ 'OmitExtension', ], 'members' => [ 'OmitExtension' => [ 'shape' => 'Boolean', 'box' => true, ], ], ], 'CsrBlob' => [ 'type' => 'blob', 'max' => 32768, 'min' => 1, ], 'CsrBody' => [ 'type' => 'string', ], 'CsrExtensions' => [ 'type' => 'structure', 'members' => [ 'KeyUsage' => [ 'shape' => 'KeyUsage', ], 'SubjectInformationAccess' => [ 'shape' => 'AccessDescriptionList', ], ], ], 'CustomAttribute' => [ 'type' => 'structure', 'required' => [ 'ObjectIdentifier', 'Value', ], 'members' => [ 'ObjectIdentifier' => [ 'shape' => 'CustomObjectIdentifier', ], 'Value' => [ 'shape' => 'String1To256', ], ], ], 'CustomAttributeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CustomAttribute', ], 'max' => 150, 'min' => 1, ], 'CustomExtension' => [ 'type' => 'structure', 'required' => [ 'ObjectIdentifier', 'Value', ], 'members' => [ 'ObjectIdentifier' => [ 'shape' => 'CustomObjectIdentifier', ], 'Value' => [ 'shape' => 'Base64String1To4096', ], 'Critical' => [ 'shape' => 'Boolean', 'box' => true, ], ], ], 'CustomExtensionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CustomExtension', ], 'max' => 150, 'min' => 1, ], 'CustomObjectIdentifier' => [ 'type' => 'string', 'max' => 64, 'min' => 0, 'pattern' => '^([0-2])\\.([0-9]|([0-3][0-9]))((\\.([0-9]+)){0,126})$', ], 'DeleteCertificateAuthorityRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], 'PermanentDeletionTimeInDays' => [ 'shape' => 'PermanentDeletionTimeInDays', ], ], ], 'DeletePermissionRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', 'Principal', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], 'Principal' => [ 'shape' => 'Principal', ], 'SourceAccount' => [ 'shape' => 'AccountId', ], ], ], 'DeletePolicyRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'Arn', ], ], ], 'DescribeCertificateAuthorityAuditReportRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', 'AuditReportId', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], 'AuditReportId' => [ 'shape' => 'AuditReportId', ], ], ], 'DescribeCertificateAuthorityAuditReportResponse' => [ 'type' => 'structure', 'members' => [ 'AuditReportStatus' => [ 'shape' => 'AuditReportStatus', ], 'S3BucketName' => [ 'shape' => 'S3BucketName', ], 'S3Key' => [ 'shape' => 'S3Key', ], 'CreatedAt' => [ 'shape' => 'TStamp', ], ], ], 'DescribeCertificateAuthorityRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], ], ], 'DescribeCertificateAuthorityResponse' => [ 'type' => 'structure', 'members' => [ 'CertificateAuthority' => [ 'shape' => 'CertificateAuthority', ], ], ], 'EdiPartyName' => [ 'type' => 'structure', 'required' => [ 'PartyName', ], 'members' => [ 'PartyName' => [ 'shape' => 'String256', ], 'NameAssigner' => [ 'shape' => 'String256', ], ], ], 'ExtendedKeyUsage' => [ 'type' => 'structure', 'members' => [ 'ExtendedKeyUsageType' => [ 'shape' => 'ExtendedKeyUsageType', ], 'ExtendedKeyUsageObjectIdentifier' => [ 'shape' => 'CustomObjectIdentifier', ], ], ], 'ExtendedKeyUsageList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExtendedKeyUsage', ], 'max' => 20, 'min' => 1, ], 'ExtendedKeyUsageType' => [ 'type' => 'string', 'enum' => [ 'SERVER_AUTH', 'CLIENT_AUTH', 'CODE_SIGNING', 'EMAIL_PROTECTION', 'TIME_STAMPING', 'OCSP_SIGNING', 'SMART_CARD_LOGIN', 'DOCUMENT_SIGNING', 'CERTIFICATE_TRANSPARENCY', ], ], 'Extensions' => [ 'type' => 'structure', 'members' => [ 'CertificatePolicies' => [ 'shape' => 'CertificatePolicyList', ], 'ExtendedKeyUsage' => [ 'shape' => 'ExtendedKeyUsageList', ], 'KeyUsage' => [ 'shape' => 'KeyUsage', ], 'SubjectAlternativeNames' => [ 'shape' => 'GeneralNameList', ], 'CustomExtensions' => [ 'shape' => 'CustomExtensionList', ], ], ], 'FailureReason' => [ 'type' => 'string', 'enum' => [ 'REQUEST_TIMED_OUT', 'UNSUPPORTED_ALGORITHM', 'OTHER', ], ], 'GeneralName' => [ 'type' => 'structure', 'members' => [ 'OtherName' => [ 'shape' => 'OtherName', ], 'Rfc822Name' => [ 'shape' => 'String256', ], 'DnsName' => [ 'shape' => 'String253', ], 'DirectoryName' => [ 'shape' => 'ASN1Subject', ], 'EdiPartyName' => [ 'shape' => 'EdiPartyName', ], 'UniformResourceIdentifier' => [ 'shape' => 'String253', ], 'IpAddress' => [ 'shape' => 'String39', ], 'RegisteredId' => [ 'shape' => 'CustomObjectIdentifier', ], ], ], 'GeneralNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GeneralName', ], 'max' => 150, 'min' => 1, ], 'GetCertificateAuthorityCertificateRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], ], ], 'GetCertificateAuthorityCertificateResponse' => [ 'type' => 'structure', 'members' => [ 'Certificate' => [ 'shape' => 'CertificateBody', ], 'CertificateChain' => [ 'shape' => 'CertificateChain', ], ], ], 'GetCertificateAuthorityCsrRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], ], ], 'GetCertificateAuthorityCsrResponse' => [ 'type' => 'structure', 'members' => [ 'Csr' => [ 'shape' => 'CsrBody', ], ], ], 'GetCertificateRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', 'CertificateArn', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], 'CertificateArn' => [ 'shape' => 'Arn', ], ], ], 'GetCertificateResponse' => [ 'type' => 'structure', 'members' => [ 'Certificate' => [ 'shape' => 'CertificateBody', ], 'CertificateChain' => [ 'shape' => 'CertificateChain', ], ], ], 'GetPolicyRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'Arn', ], ], ], 'GetPolicyResponse' => [ 'type' => 'structure', 'members' => [ 'Policy' => [ 'shape' => 'AWSPolicy', ], ], ], 'IdempotencyToken' => [ 'type' => 'string', 'max' => 36, 'min' => 1, 'pattern' => '[\\u0009\\u000A\\u000D\\u0020-\\u00FF]*', ], 'ImportCertificateAuthorityCertificateRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', 'Certificate', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], 'Certificate' => [ 'shape' => 'CertificateBodyBlob', ], 'CertificateChain' => [ 'shape' => 'CertificateChainBlob', ], ], ], 'Integer1To5000' => [ 'type' => 'integer', 'max' => 5000, 'min' => 1, ], 'InvalidArgsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidArnException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidNextTokenException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidPolicyException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidRequestException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidStateException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidTagException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'IssueCertificateRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', 'Csr', 'SigningAlgorithm', 'Validity', ], 'members' => [ 'ApiPassthrough' => [ 'shape' => 'ApiPassthrough', ], 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], 'Csr' => [ 'shape' => 'CsrBlob', ], 'SigningAlgorithm' => [ 'shape' => 'SigningAlgorithm', ], 'TemplateArn' => [ 'shape' => 'Arn', ], 'Validity' => [ 'shape' => 'Validity', ], 'ValidityNotBefore' => [ 'shape' => 'Validity', ], 'IdempotencyToken' => [ 'shape' => 'IdempotencyToken', ], ], ], 'IssueCertificateResponse' => [ 'type' => 'structure', 'members' => [ 'CertificateArn' => [ 'shape' => 'Arn', ], ], ], 'KeyAlgorithm' => [ 'type' => 'string', 'enum' => [ 'RSA_2048', 'RSA_4096', 'EC_prime256v1', 'EC_secp384r1', 'SM2', ], ], 'KeyStorageSecurityStandard' => [ 'type' => 'string', 'enum' => [ 'FIPS_140_2_LEVEL_2_OR_HIGHER', 'FIPS_140_2_LEVEL_3_OR_HIGHER', 'CCPC_LEVEL_1_OR_HIGHER', ], ], 'KeyUsage' => [ 'type' => 'structure', 'members' => [ 'DigitalSignature' => [ 'shape' => 'Boolean', ], 'NonRepudiation' => [ 'shape' => 'Boolean', ], 'KeyEncipherment' => [ 'shape' => 'Boolean', ], 'DataEncipherment' => [ 'shape' => 'Boolean', ], 'KeyAgreement' => [ 'shape' => 'Boolean', ], 'KeyCertSign' => [ 'shape' => 'Boolean', ], 'CRLSign' => [ 'shape' => 'Boolean', ], 'EncipherOnly' => [ 'shape' => 'Boolean', ], 'DecipherOnly' => [ 'shape' => 'Boolean', ], ], ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ListCertificateAuthoritiesRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'ResourceOwner' => [ 'shape' => 'ResourceOwner', ], ], ], 'ListCertificateAuthoritiesResponse' => [ 'type' => 'structure', 'members' => [ 'CertificateAuthorities' => [ 'shape' => 'CertificateAuthorities', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListPermissionsRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListPermissionsResponse' => [ 'type' => 'structure', 'members' => [ 'Permissions' => [ 'shape' => 'PermissionList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListTagsResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'LockoutPreventedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'MalformedCSRException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'MalformedCertificateException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'MaxResults' => [ 'type' => 'integer', 'max' => 1000, 'min' => 1, ], 'NextToken' => [ 'type' => 'string', 'max' => 43739, 'min' => 1, ], 'OcspConfiguration' => [ 'type' => 'structure', 'required' => [ 'Enabled', ], 'members' => [ 'Enabled' => [ 'shape' => 'Boolean', 'box' => true, ], 'OcspCustomCname' => [ 'shape' => 'CnameString', ], ], ], 'OtherName' => [ 'type' => 'structure', 'required' => [ 'TypeId', 'Value', ], 'members' => [ 'TypeId' => [ 'shape' => 'CustomObjectIdentifier', ], 'Value' => [ 'shape' => 'String256', ], ], ], 'PermanentDeletionTimeInDays' => [ 'type' => 'integer', 'max' => 30, 'min' => 7, ], 'Permission' => [ 'type' => 'structure', 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], 'CreatedAt' => [ 'shape' => 'TStamp', ], 'Principal' => [ 'shape' => 'Principal', ], 'SourceAccount' => [ 'shape' => 'AccountId', ], 'Actions' => [ 'shape' => 'ActionList', ], 'Policy' => [ 'shape' => 'AWSPolicy', ], ], ], 'PermissionAlreadyExistsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'PermissionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Permission', ], 'min' => 0, ], 'PolicyInformation' => [ 'type' => 'structure', 'required' => [ 'CertPolicyId', ], 'members' => [ 'CertPolicyId' => [ 'shape' => 'CustomObjectIdentifier', ], 'PolicyQualifiers' => [ 'shape' => 'PolicyQualifierInfoList', ], ], ], 'PolicyQualifierId' => [ 'type' => 'string', 'enum' => [ 'CPS', ], ], 'PolicyQualifierInfo' => [ 'type' => 'structure', 'required' => [ 'PolicyQualifierId', 'Qualifier', ], 'members' => [ 'PolicyQualifierId' => [ 'shape' => 'PolicyQualifierId', ], 'Qualifier' => [ 'shape' => 'Qualifier', ], ], ], 'PolicyQualifierInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PolicyQualifierInfo', ], 'max' => 20, 'min' => 1, ], 'PositiveLong' => [ 'type' => 'long', 'min' => 1, ], 'Principal' => [ 'type' => 'string', 'max' => 128, 'min' => 0, 'pattern' => '^[^*]+$', ], 'PutPolicyRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'Policy', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'Arn', ], 'Policy' => [ 'shape' => 'AWSPolicy', ], ], ], 'Qualifier' => [ 'type' => 'structure', 'required' => [ 'CpsUri', ], 'members' => [ 'CpsUri' => [ 'shape' => 'String256', ], ], ], 'RequestAlreadyProcessedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'RequestFailedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'RequestInProgressException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ResourceOwner' => [ 'type' => 'string', 'enum' => [ 'SELF', 'OTHER_ACCOUNTS', ], ], 'RestoreCertificateAuthorityRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], ], ], 'RevocationConfiguration' => [ 'type' => 'structure', 'members' => [ 'CrlConfiguration' => [ 'shape' => 'CrlConfiguration', ], 'OcspConfiguration' => [ 'shape' => 'OcspConfiguration', ], ], ], 'RevocationReason' => [ 'type' => 'string', 'enum' => [ 'UNSPECIFIED', 'KEY_COMPROMISE', 'CERTIFICATE_AUTHORITY_COMPROMISE', 'AFFILIATION_CHANGED', 'SUPERSEDED', 'CESSATION_OF_OPERATION', 'PRIVILEGE_WITHDRAWN', 'A_A_COMPROMISE', ], ], 'RevokeCertificateRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', 'CertificateSerial', 'RevocationReason', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], 'CertificateSerial' => [ 'shape' => 'String128', ], 'RevocationReason' => [ 'shape' => 'RevocationReason', ], ], ], 'S3BucketName' => [ 'type' => 'string', 'max' => 63, 'min' => 3, ], 'S3BucketName3To255' => [ 'type' => 'string', 'max' => 255, 'min' => 3, 'pattern' => '^[-a-zA-Z0-9._/]+$', ], 'S3Key' => [ 'type' => 'string', 'max' => 1024, ], 'S3ObjectAcl' => [ 'type' => 'string', 'enum' => [ 'PUBLIC_READ', 'BUCKET_OWNER_FULL_CONTROL', ], ], 'SigningAlgorithm' => [ 'type' => 'string', 'enum' => [ 'SHA256WITHECDSA', 'SHA384WITHECDSA', 'SHA512WITHECDSA', 'SHA256WITHRSA', 'SHA384WITHRSA', 'SHA512WITHRSA', 'SM3WITHSM2', ], ], 'String' => [ 'type' => 'string', ], 'String128' => [ 'type' => 'string', 'max' => 128, 'min' => 0, ], 'String16' => [ 'type' => 'string', 'max' => 16, 'min' => 0, ], 'String1To256' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'String253' => [ 'type' => 'string', 'max' => 253, 'min' => 0, ], 'String256' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'String3' => [ 'type' => 'string', 'max' => 3, 'min' => 0, ], 'String39' => [ 'type' => 'string', 'max' => 39, 'min' => 0, ], 'String40' => [ 'type' => 'string', 'max' => 40, 'min' => 0, ], 'String5' => [ 'type' => 'string', 'max' => 5, 'min' => 0, ], 'String64' => [ 'type' => 'string', 'max' => 64, 'min' => 0, ], 'TStamp' => [ 'type' => 'timestamp', ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagCertificateAuthorityRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', 'Tags', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$', ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 50, 'min' => 1, ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$', ], 'TooManyTagsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'UntagCertificateAuthorityRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', 'Tags', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'UpdateCertificateAuthorityRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], 'RevocationConfiguration' => [ 'shape' => 'RevocationConfiguration', ], 'Status' => [ 'shape' => 'CertificateAuthorityStatus', ], ], ], 'Validity' => [ 'type' => 'structure', 'required' => [ 'Value', 'Type', ], 'members' => [ 'Value' => [ 'shape' => 'PositiveLong', 'box' => true, ], 'Type' => [ 'shape' => 'ValidityPeriodType', ], ], ], 'ValidityPeriodType' => [ 'type' => 'string', 'enum' => [ 'END_DATE', 'ABSOLUTE', 'DAYS', 'MONTHS', 'YEARS', ], ], ],];

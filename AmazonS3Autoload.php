<?php
/**
 * File to load generated classes once at once time
 * @package AmazonS3
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * Includes for all generated classes files
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
require_once dirname(__FILE__) . '/AmazonS3WsdlClass.php';
require_once dirname(__FILE__) . '/Grantee/AmazonS3StructGrantee.php';
require_once dirname(__FILE__) . '/User/AmazonS3StructUser.php';
require_once dirname(__FILE__) . '/Result/AmazonS3StructResult.php';
require_once dirname(__FILE__) . '/Version/Entry/AmazonS3StructVersionEntry.php';
require_once dirname(__FILE__) . '/List/Entry/AmazonS3StructListEntry.php';
require_once dirname(__FILE__) . '/List/Response/AmazonS3StructListVersionsResponse.php';
require_once dirname(__FILE__) . '/Delete/Entry/AmazonS3StructDeleteMarkerEntry.php';
require_once dirname(__FILE__) . '/List/Result/AmazonS3StructListBucketResult.php';
require_once dirname(__FILE__) . '/List/Result/AmazonS3StructListVersionsResult.php';
require_once dirname(__FILE__) . '/List/Response/AmazonS3StructListBucketResponse.php';
require_once dirname(__FILE__) . '/Prefix/Entry/AmazonS3StructPrefixEntry.php';
require_once dirname(__FILE__) . '/List/Bucket/AmazonS3StructListBucket.php';
require_once dirname(__FILE__) . '/Put/Result/AmazonS3StructPutObjectResult.php';
require_once dirname(__FILE__) . '/Put/Response/AmazonS3StructPutObjectResponse.php';
require_once dirname(__FILE__) . '/Put/Object/AmazonS3StructPutObject.php';
require_once dirname(__FILE__) . '/Put/Inline/AmazonS3StructPutObjectInline.php';
require_once dirname(__FILE__) . '/Put/Response/AmazonS3StructPutObjectInlineResponse.php';
require_once dirname(__FILE__) . '/Delete/Response/AmazonS3StructDeleteObjectResponse.php';
require_once dirname(__FILE__) . '/Delete/Object/AmazonS3StructDeleteObject.php';
require_once dirname(__FILE__) . '/List/Buckets/AmazonS3StructListAllMyBuckets.php';
require_once dirname(__FILE__) . '/Get/Response/AmazonS3StructGetObjectExtendedResponse.php';
require_once dirname(__FILE__) . '/Payer/AmazonS3EnumPayer.php';
require_once dirname(__FILE__) . '/Request/Configuration/AmazonS3StructRequestPaymentConfiguration.php';
require_once dirname(__FILE__) . '/Copy/Result/AmazonS3StructCopyObjectResult.php';
require_once dirname(__FILE__) . '/Versioning/Configuration/AmazonS3StructVersioningConfiguration.php';
require_once dirname(__FILE__) . '/Mfa/Status/AmazonS3EnumMfaDeleteStatus.php';
require_once dirname(__FILE__) . '/Notification/Configuration/AmazonS3StructNotificationConfiguration.php';
require_once dirname(__FILE__) . '/Versioning/Status/AmazonS3EnumVersioningStatus.php';
require_once dirname(__FILE__) . '/Copy/Response/AmazonS3StructCopyObjectResponse.php';
require_once dirname(__FILE__) . '/Copy/Object/AmazonS3StructCopyObject.php';
require_once dirname(__FILE__) . '/List/Entry/AmazonS3StructListAllMyBucketsEntry.php';
require_once dirname(__FILE__) . '/List/Response/AmazonS3StructListAllMyBucketsResponse.php';
require_once dirname(__FILE__) . '/List/Result/AmazonS3StructListAllMyBucketsResult.php';
require_once dirname(__FILE__) . '/List/List/AmazonS3StructListAllMyBucketsList.php';
require_once dirname(__FILE__) . '/Metadata/Directive/AmazonS3EnumMetadataDirective.php';
require_once dirname(__FILE__) . '/Post/Response/AmazonS3StructPostResponse.php';
require_once dirname(__FILE__) . '/Topic/Configuration/AmazonS3StructTopicConfiguration.php';
require_once dirname(__FILE__) . '/Get/Response/AmazonS3StructGetObjectResponse.php';
require_once dirname(__FILE__) . '/Set/Response/AmazonS3StructSetBucketLoggingStatusResponse.php';
require_once dirname(__FILE__) . '/Set/Status/AmazonS3StructSetBucketLoggingStatus.php';
require_once dirname(__FILE__) . '/Get/Response/AmazonS3StructGetBucketLoggingStatusResponse.php';
require_once dirname(__FILE__) . '/Get/Policy/AmazonS3StructGetObjectAccessControlPolicy.php';
require_once dirname(__FILE__) . '/Get/Response/AmazonS3StructGetObjectAccessControlPolicyResponse.php';
require_once dirname(__FILE__) . '/Get/Response/AmazonS3StructGetBucketAccessControlPolicyResponse.php';
require_once dirname(__FILE__) . '/Get/Policy/AmazonS3StructGetBucketAccessControlPolicy.php';
require_once dirname(__FILE__) . '/Get/Status/AmazonS3StructGetBucketLoggingStatus.php';
require_once dirname(__FILE__) . '/Logging/Settings/AmazonS3StructLoggingSettings.php';
require_once dirname(__FILE__) . '/Status/AmazonS3StructStatus.php';
require_once dirname(__FILE__) . '/Create/Response/AmazonS3StructCreateBucketResponse.php';
require_once dirname(__FILE__) . '/Metadata/Entry/AmazonS3StructMetadataEntry.php';
require_once dirname(__FILE__) . '/Create/Result/AmazonS3StructCreateBucketResult.php';
require_once dirname(__FILE__) . '/Delete/Bucket/AmazonS3StructDeleteBucket.php';
require_once dirname(__FILE__) . '/Bucket/Status/AmazonS3StructBucketLoggingStatus.php';
require_once dirname(__FILE__) . '/Delete/Response/AmazonS3StructDeleteBucketResponse.php';
require_once dirname(__FILE__) . '/Amazon/Email/AmazonS3StructAmazonCustomerByEmail.php';
require_once dirname(__FILE__) . '/Canonical/User/AmazonS3StructCanonicalUser.php';
require_once dirname(__FILE__) . '/Set/Policy/AmazonS3StructSetBucketAccessControlPolicy.php';
require_once dirname(__FILE__) . '/Set/Response/AmazonS3StructSetObjectAccessControlPolicyResponse.php';
require_once dirname(__FILE__) . '/Set/Policy/AmazonS3StructSetObjectAccessControlPolicy.php';
require_once dirname(__FILE__) . '/Set/Response/AmazonS3StructSetBucketAccessControlPolicyResponse.php';
require_once dirname(__FILE__) . '/Get/Object/AmazonS3StructGetObject.php';
require_once dirname(__FILE__) . '/Get/Result/AmazonS3StructGetObjectResult.php';
require_once dirname(__FILE__) . '/Create/Bucket/AmazonS3StructCreateBucket.php';
require_once dirname(__FILE__) . '/Access/Policy/AmazonS3StructAccessControlPolicy.php';
require_once dirname(__FILE__) . '/Location/Constraint/AmazonS3StructLocationConstraint.php';
require_once dirname(__FILE__) . '/Permission/AmazonS3EnumPermission.php';
require_once dirname(__FILE__) . '/Group/AmazonS3StructGroup.php';
require_once dirname(__FILE__) . '/Storage/Class/AmazonS3EnumStorageClass.php';
require_once dirname(__FILE__) . '/Grant/AmazonS3StructGrant.php';
require_once dirname(__FILE__) . '/Create/Configuration/AmazonS3StructCreateBucketConfiguration.php';
require_once dirname(__FILE__) . '/Access/List/AmazonS3StructAccessControlList.php';
require_once dirname(__FILE__) . '/Get/Extended/AmazonS3StructGetObjectExtended.php';
require_once dirname(__FILE__) . '/Create/AmazonS3ServiceCreate.php';
require_once dirname(__FILE__) . '/Delete/AmazonS3ServiceDelete.php';
require_once dirname(__FILE__) . '/Get/AmazonS3ServiceGet.php';
require_once dirname(__FILE__) . '/Set/AmazonS3ServiceSet.php';
require_once dirname(__FILE__) . '/Put/AmazonS3ServicePut.php';
require_once dirname(__FILE__) . '/List/AmazonS3ServiceList.php';
require_once dirname(__FILE__) . '/Copy/AmazonS3ServiceCopy.php';
require_once dirname(__FILE__) . '/AmazonS3ClassMap.php';
?>
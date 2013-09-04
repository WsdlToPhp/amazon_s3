<?php
/**
 * File for the class which returns the class map definition
 * @package AmazonS3
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * Class which returns the class map definition by the static method AmazonS3ClassMap::classMap()
 * @package AmazonS3
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3ClassMap
{
	/**
	 * This method returns the array containing the mapping between WSDL structs and generated classes
	 * This array is sent to the SoapClient when calling the WS
	 * @return array
	 */
	final public static function classMap()
	{
		return array (
  'AccessControlList' => 'AmazonS3StructAccessControlList',
  'AccessControlPolicy' => 'AmazonS3StructAccessControlPolicy',
  'AmazonCustomerByEmail' => 'AmazonS3StructAmazonCustomerByEmail',
  'BucketLoggingStatus' => 'AmazonS3StructBucketLoggingStatus',
  'CanonicalUser' => 'AmazonS3StructCanonicalUser',
  'CopyObject' => 'AmazonS3StructCopyObject',
  'CopyObjectResponse' => 'AmazonS3StructCopyObjectResponse',
  'CopyObjectResult' => 'AmazonS3StructCopyObjectResult',
  'CreateBucket' => 'AmazonS3StructCreateBucket',
  'CreateBucketConfiguration' => 'AmazonS3StructCreateBucketConfiguration',
  'CreateBucketResponse' => 'AmazonS3StructCreateBucketResponse',
  'CreateBucketResult' => 'AmazonS3StructCreateBucketResult',
  'DeleteBucket' => 'AmazonS3StructDeleteBucket',
  'DeleteBucketResponse' => 'AmazonS3StructDeleteBucketResponse',
  'DeleteMarkerEntry' => 'AmazonS3StructDeleteMarkerEntry',
  'DeleteObject' => 'AmazonS3StructDeleteObject',
  'DeleteObjectResponse' => 'AmazonS3StructDeleteObjectResponse',
  'GetBucketAccessControlPolicy' => 'AmazonS3StructGetBucketAccessControlPolicy',
  'GetBucketAccessControlPolicyResponse' => 'AmazonS3StructGetBucketAccessControlPolicyResponse',
  'GetBucketLoggingStatus' => 'AmazonS3StructGetBucketLoggingStatus',
  'GetBucketLoggingStatusResponse' => 'AmazonS3StructGetBucketLoggingStatusResponse',
  'GetObject' => 'AmazonS3StructGetObject',
  'GetObjectAccessControlPolicy' => 'AmazonS3StructGetObjectAccessControlPolicy',
  'GetObjectAccessControlPolicyResponse' => 'AmazonS3StructGetObjectAccessControlPolicyResponse',
  'GetObjectExtended' => 'AmazonS3StructGetObjectExtended',
  'GetObjectExtendedResponse' => 'AmazonS3StructGetObjectExtendedResponse',
  'GetObjectResponse' => 'AmazonS3StructGetObjectResponse',
  'GetObjectResult' => 'AmazonS3StructGetObjectResult',
  'Grant' => 'AmazonS3StructGrant',
  'Grantee' => 'AmazonS3StructGrantee',
  'Group' => 'AmazonS3StructGroup',
  'ListAllMyBuckets' => 'AmazonS3StructListAllMyBuckets',
  'ListAllMyBucketsEntry' => 'AmazonS3StructListAllMyBucketsEntry',
  'ListAllMyBucketsList' => 'AmazonS3StructListAllMyBucketsList',
  'ListAllMyBucketsResponse' => 'AmazonS3StructListAllMyBucketsResponse',
  'ListAllMyBucketsResult' => 'AmazonS3StructListAllMyBucketsResult',
  'ListBucket' => 'AmazonS3StructListBucket',
  'ListBucketResponse' => 'AmazonS3StructListBucketResponse',
  'ListBucketResult' => 'AmazonS3StructListBucketResult',
  'ListEntry' => 'AmazonS3StructListEntry',
  'ListVersionsResponse' => 'AmazonS3StructListVersionsResponse',
  'ListVersionsResult' => 'AmazonS3StructListVersionsResult',
  'LocationConstraint' => 'AmazonS3StructLocationConstraint',
  'LoggingSettings' => 'AmazonS3StructLoggingSettings',
  'MetadataDirective' => 'AmazonS3EnumMetadataDirective',
  'MetadataEntry' => 'AmazonS3StructMetadataEntry',
  'MfaDeleteStatus' => 'AmazonS3EnumMfaDeleteStatus',
  'NotificationConfiguration' => 'AmazonS3StructNotificationConfiguration',
  'Payer' => 'AmazonS3EnumPayer',
  'Permission' => 'AmazonS3EnumPermission',
  'PostResponse' => 'AmazonS3StructPostResponse',
  'PrefixEntry' => 'AmazonS3StructPrefixEntry',
  'PutObject' => 'AmazonS3StructPutObject',
  'PutObjectInline' => 'AmazonS3StructPutObjectInline',
  'PutObjectInlineResponse' => 'AmazonS3StructPutObjectInlineResponse',
  'PutObjectResponse' => 'AmazonS3StructPutObjectResponse',
  'PutObjectResult' => 'AmazonS3StructPutObjectResult',
  'RequestPaymentConfiguration' => 'AmazonS3StructRequestPaymentConfiguration',
  'Result' => 'AmazonS3StructResult',
  'SetBucketAccessControlPolicy' => 'AmazonS3StructSetBucketAccessControlPolicy',
  'SetBucketAccessControlPolicyResponse' => 'AmazonS3StructSetBucketAccessControlPolicyResponse',
  'SetBucketLoggingStatus' => 'AmazonS3StructSetBucketLoggingStatus',
  'SetBucketLoggingStatusResponse' => 'AmazonS3StructSetBucketLoggingStatusResponse',
  'SetObjectAccessControlPolicy' => 'AmazonS3StructSetObjectAccessControlPolicy',
  'SetObjectAccessControlPolicyResponse' => 'AmazonS3StructSetObjectAccessControlPolicyResponse',
  'Status' => 'AmazonS3StructStatus',
  'StorageClass' => 'AmazonS3EnumStorageClass',
  'TopicConfiguration' => 'AmazonS3StructTopicConfiguration',
  'User' => 'AmazonS3StructUser',
  'VersionEntry' => 'AmazonS3StructVersionEntry',
  'VersioningConfiguration' => 'AmazonS3StructVersioningConfiguration',
  'VersioningStatus' => 'AmazonS3EnumVersioningStatus',
);
	}
}
?>
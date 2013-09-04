<?php
/**
 * File for class AmazonS3ServiceCopy
 * @package AmazonS3
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3ServiceCopy originally named Copy
 * @package AmazonS3
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3ServiceCopy extends AmazonS3WsdlClass
{
	/**
	 * Method to call the operation originally named CopyObject
	 * @uses AmazonS3WsdlClass::getSoapClient()
	 * @uses AmazonS3WsdlClass::setResult()
	 * @uses AmazonS3WsdlClass::getResult()
	 * @uses AmazonS3WsdlClass::saveLastError()
	 * @uses AmazonS3StructCopyObject::getSourceBucket()
	 * @uses AmazonS3StructCopyObject::getSourceKey()
	 * @uses AmazonS3StructCopyObject::getDestinationBucket()
	 * @uses AmazonS3StructCopyObject::getDestinationKey()
	 * @uses AmazonS3StructCopyObject::getMetadataDirective()
	 * @uses AmazonS3StructCopyObject::getMetadata()
	 * @uses AmazonS3StructCopyObject::getAccessControlList()
	 * @uses AmazonS3StructCopyObject::getCopySourceIfModifiedSince()
	 * @uses AmazonS3StructCopyObject::getCopySourceIfUnmodifiedSince()
	 * @uses AmazonS3StructCopyObject::getCopySourceIfMatch()
	 * @uses AmazonS3StructCopyObject::getCopySourceIfNoneMatch()
	 * @uses AmazonS3StructCopyObject::getStorageClass()
	 * @uses AmazonS3StructCopyObject::getAWSAccessKeyId()
	 * @uses AmazonS3StructCopyObject::getTimestamp()
	 * @uses AmazonS3StructCopyObject::getSignature()
	 * @uses AmazonS3StructCopyObject::getCredential()
	 * @param AmazonS3StructCopyObject $_amazonS3StructCopyObject
	 * @return AmazonS3StructCopyObjectResponse
	 */
	public function CopyObject(AmazonS3StructCopyObject $_amazonS3StructCopyObject)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CopyObject(array('SourceBucket'=>$_amazonS3StructCopyObject->getSourceBucket(),'SourceKey'=>$_amazonS3StructCopyObject->getSourceKey(),'DestinationBucket'=>$_amazonS3StructCopyObject->getDestinationBucket(),'DestinationKey'=>$_amazonS3StructCopyObject->getDestinationKey(),'MetadataDirective'=>$_amazonS3StructCopyObject->getMetadataDirective(),'Metadata'=>$_amazonS3StructCopyObject->getMetadata(),'AccessControlList'=>$_amazonS3StructCopyObject->getAccessControlList(),'CopySourceIfModifiedSince'=>$_amazonS3StructCopyObject->getCopySourceIfModifiedSince(),'CopySourceIfUnmodifiedSince'=>$_amazonS3StructCopyObject->getCopySourceIfUnmodifiedSince(),'CopySourceIfMatch'=>$_amazonS3StructCopyObject->getCopySourceIfMatch(),'CopySourceIfNoneMatch'=>$_amazonS3StructCopyObject->getCopySourceIfNoneMatch(),'StorageClass'=>$_amazonS3StructCopyObject->getStorageClass(),'AWSAccessKeyId'=>$_amazonS3StructCopyObject->getAWSAccessKeyId(),'Timestamp'=>$_amazonS3StructCopyObject->getTimestamp(),'Signature'=>$_amazonS3StructCopyObject->getSignature(),'Credential'=>$_amazonS3StructCopyObject->getCredential())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Returns the result
	 * @see AmazonS3WsdlClass::getResult()
	 * @return AmazonS3StructCopyObjectResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>
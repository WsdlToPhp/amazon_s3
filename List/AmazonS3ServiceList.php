<?php
/**
 * File for class AmazonS3ServiceList
 * @package AmazonS3
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3ServiceList originally named List
 * @package AmazonS3
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3ServiceList extends AmazonS3WsdlClass
{
	/**
	 * Method to call the operation originally named ListBucket
	 * @uses AmazonS3WsdlClass::getSoapClient()
	 * @uses AmazonS3WsdlClass::setResult()
	 * @uses AmazonS3WsdlClass::getResult()
	 * @uses AmazonS3WsdlClass::saveLastError()
	 * @uses AmazonS3StructListBucket::getBucket()
	 * @uses AmazonS3StructListBucket::getPrefix()
	 * @uses AmazonS3StructListBucket::getMarker()
	 * @uses AmazonS3StructListBucket::getMaxKeys()
	 * @uses AmazonS3StructListBucket::getDelimiter()
	 * @uses AmazonS3StructListBucket::getAWSAccessKeyId()
	 * @uses AmazonS3StructListBucket::getTimestamp()
	 * @uses AmazonS3StructListBucket::getSignature()
	 * @uses AmazonS3StructListBucket::getCredential()
	 * @param AmazonS3StructListBucket $_amazonS3StructListBucket
	 * @return AmazonS3StructListBucketResponse
	 */
	public function ListBucket(AmazonS3StructListBucket $_amazonS3StructListBucket)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListBucket(array('Bucket'=>$_amazonS3StructListBucket->getBucket(),'Prefix'=>$_amazonS3StructListBucket->getPrefix(),'Marker'=>$_amazonS3StructListBucket->getMarker(),'MaxKeys'=>$_amazonS3StructListBucket->getMaxKeys(),'Delimiter'=>$_amazonS3StructListBucket->getDelimiter(),'AWSAccessKeyId'=>$_amazonS3StructListBucket->getAWSAccessKeyId(),'Timestamp'=>$_amazonS3StructListBucket->getTimestamp(),'Signature'=>$_amazonS3StructListBucket->getSignature(),'Credential'=>$_amazonS3StructListBucket->getCredential())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ListAllMyBuckets
	 * @uses AmazonS3WsdlClass::getSoapClient()
	 * @uses AmazonS3WsdlClass::setResult()
	 * @uses AmazonS3WsdlClass::getResult()
	 * @uses AmazonS3WsdlClass::saveLastError()
	 * @uses AmazonS3StructListAllMyBuckets::getAWSAccessKeyId()
	 * @uses AmazonS3StructListAllMyBuckets::getTimestamp()
	 * @uses AmazonS3StructListAllMyBuckets::getSignature()
	 * @param AmazonS3StructListAllMyBuckets $_amazonS3StructListAllMyBuckets
	 * @return AmazonS3StructListAllMyBucketsResponse
	 */
	public function ListAllMyBuckets(AmazonS3StructListAllMyBuckets $_amazonS3StructListAllMyBuckets)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListAllMyBuckets(array('AWSAccessKeyId'=>$_amazonS3StructListAllMyBuckets->getAWSAccessKeyId(),'Timestamp'=>$_amazonS3StructListAllMyBuckets->getTimestamp(),'Signature'=>$_amazonS3StructListAllMyBuckets->getSignature())));
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
	 * @return AmazonS3StructListAllMyBucketsResponse|AmazonS3StructListBucketResponse
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
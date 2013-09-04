<?php
/**
 * File for class AmazonS3StructPutObject
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructPutObject originally named PutObject
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructPutObject extends AmazonS3WsdlClass
{
	/**
	 * The Bucket
	 * @var string
	 */
	public $Bucket;
	/**
	 * The Key
	 * @var string
	 */
	public $Key;
	/**
	 * The Metadata
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 100
	 * - minOccurs : 0
	 * @var AmazonS3StructMetadataEntry
	 */
	public $Metadata;
	/**
	 * The ContentLength
	 * @var long
	 */
	public $ContentLength;
	/**
	 * The AccessControlList
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var AmazonS3StructAccessControlList
	 */
	public $AccessControlList;
	/**
	 * The StorageClass
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var AmazonS3EnumStorageClass
	 */
	public $StorageClass;
	/**
	 * The AWSAccessKeyId
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $AWSAccessKeyId;
	/**
	 * The Timestamp
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $Timestamp;
	/**
	 * The Signature
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $Signature;
	/**
	 * The Credential
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $Credential;
	/**
	 * Constructor method for PutObject
	 * @see parent::__construct()
	 * @param string $_bucket
	 * @param string $_key
	 * @param AmazonS3StructMetadataEntry $_metadata
	 * @param long $_contentLength
	 * @param AmazonS3StructAccessControlList $_accessControlList
	 * @param AmazonS3EnumStorageClass $_storageClass
	 * @param string $_aWSAccessKeyId
	 * @param dateTime $_timestamp
	 * @param string $_signature
	 * @param string $_credential
	 * @return AmazonS3StructPutObject
	 */
	public function __construct($_bucket = NULL,$_key = NULL,$_metadata = NULL,$_contentLength = NULL,$_accessControlList = NULL,$_storageClass = NULL,$_aWSAccessKeyId = NULL,$_timestamp = NULL,$_signature = NULL,$_credential = NULL)
	{
		parent::__construct(array('Bucket'=>$_bucket,'Key'=>$_key,'Metadata'=>$_metadata,'ContentLength'=>$_contentLength,'AccessControlList'=>$_accessControlList,'StorageClass'=>$_storageClass,'AWSAccessKeyId'=>$_aWSAccessKeyId,'Timestamp'=>$_timestamp,'Signature'=>$_signature,'Credential'=>$_credential));
	}
	/**
	 * Get Bucket value
	 * @return string|null
	 */
	public function getBucket()
	{
		return $this->Bucket;
	}
	/**
	 * Set Bucket value
	 * @param string $_bucket the Bucket
	 * @return string
	 */
	public function setBucket($_bucket)
	{
		return ($this->Bucket = $_bucket);
	}
	/**
	 * Get Key value
	 * @return string|null
	 */
	public function getKey()
	{
		return $this->Key;
	}
	/**
	 * Set Key value
	 * @param string $_key the Key
	 * @return string
	 */
	public function setKey($_key)
	{
		return ($this->Key = $_key);
	}
	/**
	 * Get Metadata value
	 * @return AmazonS3StructMetadataEntry|null
	 */
	public function getMetadata()
	{
		return $this->Metadata;
	}
	/**
	 * Set Metadata value
	 * @param AmazonS3StructMetadataEntry $_metadata the Metadata
	 * @return AmazonS3StructMetadataEntry
	 */
	public function setMetadata($_metadata)
	{
		return ($this->Metadata = $_metadata);
	}
	/**
	 * Get ContentLength value
	 * @return long|null
	 */
	public function getContentLength()
	{
		return $this->ContentLength;
	}
	/**
	 * Set ContentLength value
	 * @param long $_contentLength the ContentLength
	 * @return long
	 */
	public function setContentLength($_contentLength)
	{
		return ($this->ContentLength = $_contentLength);
	}
	/**
	 * Get AccessControlList value
	 * @return AmazonS3StructAccessControlList|null
	 */
	public function getAccessControlList()
	{
		return $this->AccessControlList;
	}
	/**
	 * Set AccessControlList value
	 * @param AmazonS3StructAccessControlList $_accessControlList the AccessControlList
	 * @return AmazonS3StructAccessControlList
	 */
	public function setAccessControlList($_accessControlList)
	{
		return ($this->AccessControlList = $_accessControlList);
	}
	/**
	 * Get StorageClass value
	 * @return AmazonS3EnumStorageClass|null
	 */
	public function getStorageClass()
	{
		return $this->StorageClass;
	}
	/**
	 * Set StorageClass value
	 * @uses AmazonS3EnumStorageClass::valueIsValid()
	 * @param AmazonS3EnumStorageClass $_storageClass the StorageClass
	 * @return AmazonS3EnumStorageClass
	 */
	public function setStorageClass($_storageClass)
	{
		if(!AmazonS3EnumStorageClass::valueIsValid($_storageClass))
		{
			return false;
		}
		return ($this->StorageClass = $_storageClass);
	}
	/**
	 * Get AWSAccessKeyId value
	 * @return string|null
	 */
	public function getAWSAccessKeyId()
	{
		return $this->AWSAccessKeyId;
	}
	/**
	 * Set AWSAccessKeyId value
	 * @param string $_aWSAccessKeyId the AWSAccessKeyId
	 * @return string
	 */
	public function setAWSAccessKeyId($_aWSAccessKeyId)
	{
		return ($this->AWSAccessKeyId = $_aWSAccessKeyId);
	}
	/**
	 * Get Timestamp value
	 * @return dateTime|null
	 */
	public function getTimestamp()
	{
		return $this->Timestamp;
	}
	/**
	 * Set Timestamp value
	 * @param dateTime $_timestamp the Timestamp
	 * @return dateTime
	 */
	public function setTimestamp($_timestamp)
	{
		return ($this->Timestamp = $_timestamp);
	}
	/**
	 * Get Signature value
	 * @return string|null
	 */
	public function getSignature()
	{
		return $this->Signature;
	}
	/**
	 * Set Signature value
	 * @param string $_signature the Signature
	 * @return string
	 */
	public function setSignature($_signature)
	{
		return ($this->Signature = $_signature);
	}
	/**
	 * Get Credential value
	 * @return string|null
	 */
	public function getCredential()
	{
		return $this->Credential;
	}
	/**
	 * Set Credential value
	 * @param string $_credential the Credential
	 * @return string
	 */
	public function setCredential($_credential)
	{
		return ($this->Credential = $_credential);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructPutObject
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
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
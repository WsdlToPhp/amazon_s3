<?php
/**
 * File for class AmazonS3StructCopyObject
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructCopyObject originally named CopyObject
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructCopyObject extends AmazonS3WsdlClass
{
	/**
	 * The SourceBucket
	 * @var string
	 */
	public $SourceBucket;
	/**
	 * The SourceKey
	 * @var string
	 */
	public $SourceKey;
	/**
	 * The DestinationBucket
	 * @var string
	 */
	public $DestinationBucket;
	/**
	 * The DestinationKey
	 * @var string
	 */
	public $DestinationKey;
	/**
	 * The MetadataDirective
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var AmazonS3EnumMetadataDirective
	 */
	public $MetadataDirective;
	/**
	 * The Metadata
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 100
	 * - minOccurs : 0
	 * @var AmazonS3StructMetadataEntry
	 */
	public $Metadata;
	/**
	 * The AccessControlList
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var AmazonS3StructAccessControlList
	 */
	public $AccessControlList;
	/**
	 * The CopySourceIfModifiedSince
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $CopySourceIfModifiedSince;
	/**
	 * The CopySourceIfUnmodifiedSince
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $CopySourceIfUnmodifiedSince;
	/**
	 * The CopySourceIfMatch
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 100
	 * - minOccurs : 0
	 * @var string
	 */
	public $CopySourceIfMatch;
	/**
	 * The CopySourceIfNoneMatch
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 100
	 * - minOccurs : 0
	 * @var string
	 */
	public $CopySourceIfNoneMatch;
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
	 * Constructor method for CopyObject
	 * @see parent::__construct()
	 * @param string $_sourceBucket
	 * @param string $_sourceKey
	 * @param string $_destinationBucket
	 * @param string $_destinationKey
	 * @param AmazonS3EnumMetadataDirective $_metadataDirective
	 * @param AmazonS3StructMetadataEntry $_metadata
	 * @param AmazonS3StructAccessControlList $_accessControlList
	 * @param dateTime $_copySourceIfModifiedSince
	 * @param dateTime $_copySourceIfUnmodifiedSince
	 * @param string $_copySourceIfMatch
	 * @param string $_copySourceIfNoneMatch
	 * @param AmazonS3EnumStorageClass $_storageClass
	 * @param string $_aWSAccessKeyId
	 * @param dateTime $_timestamp
	 * @param string $_signature
	 * @param string $_credential
	 * @return AmazonS3StructCopyObject
	 */
	public function __construct($_sourceBucket = NULL,$_sourceKey = NULL,$_destinationBucket = NULL,$_destinationKey = NULL,$_metadataDirective = NULL,$_metadata = NULL,$_accessControlList = NULL,$_copySourceIfModifiedSince = NULL,$_copySourceIfUnmodifiedSince = NULL,$_copySourceIfMatch = NULL,$_copySourceIfNoneMatch = NULL,$_storageClass = NULL,$_aWSAccessKeyId = NULL,$_timestamp = NULL,$_signature = NULL,$_credential = NULL)
	{
		parent::__construct(array('SourceBucket'=>$_sourceBucket,'SourceKey'=>$_sourceKey,'DestinationBucket'=>$_destinationBucket,'DestinationKey'=>$_destinationKey,'MetadataDirective'=>$_metadataDirective,'Metadata'=>$_metadata,'AccessControlList'=>$_accessControlList,'CopySourceIfModifiedSince'=>$_copySourceIfModifiedSince,'CopySourceIfUnmodifiedSince'=>$_copySourceIfUnmodifiedSince,'CopySourceIfMatch'=>$_copySourceIfMatch,'CopySourceIfNoneMatch'=>$_copySourceIfNoneMatch,'StorageClass'=>$_storageClass,'AWSAccessKeyId'=>$_aWSAccessKeyId,'Timestamp'=>$_timestamp,'Signature'=>$_signature,'Credential'=>$_credential));
	}
	/**
	 * Get SourceBucket value
	 * @return string|null
	 */
	public function getSourceBucket()
	{
		return $this->SourceBucket;
	}
	/**
	 * Set SourceBucket value
	 * @param string $_sourceBucket the SourceBucket
	 * @return string
	 */
	public function setSourceBucket($_sourceBucket)
	{
		return ($this->SourceBucket = $_sourceBucket);
	}
	/**
	 * Get SourceKey value
	 * @return string|null
	 */
	public function getSourceKey()
	{
		return $this->SourceKey;
	}
	/**
	 * Set SourceKey value
	 * @param string $_sourceKey the SourceKey
	 * @return string
	 */
	public function setSourceKey($_sourceKey)
	{
		return ($this->SourceKey = $_sourceKey);
	}
	/**
	 * Get DestinationBucket value
	 * @return string|null
	 */
	public function getDestinationBucket()
	{
		return $this->DestinationBucket;
	}
	/**
	 * Set DestinationBucket value
	 * @param string $_destinationBucket the DestinationBucket
	 * @return string
	 */
	public function setDestinationBucket($_destinationBucket)
	{
		return ($this->DestinationBucket = $_destinationBucket);
	}
	/**
	 * Get DestinationKey value
	 * @return string|null
	 */
	public function getDestinationKey()
	{
		return $this->DestinationKey;
	}
	/**
	 * Set DestinationKey value
	 * @param string $_destinationKey the DestinationKey
	 * @return string
	 */
	public function setDestinationKey($_destinationKey)
	{
		return ($this->DestinationKey = $_destinationKey);
	}
	/**
	 * Get MetadataDirective value
	 * @return AmazonS3EnumMetadataDirective|null
	 */
	public function getMetadataDirective()
	{
		return $this->MetadataDirective;
	}
	/**
	 * Set MetadataDirective value
	 * @uses AmazonS3EnumMetadataDirective::valueIsValid()
	 * @param AmazonS3EnumMetadataDirective $_metadataDirective the MetadataDirective
	 * @return AmazonS3EnumMetadataDirective
	 */
	public function setMetadataDirective($_metadataDirective)
	{
		if(!AmazonS3EnumMetadataDirective::valueIsValid($_metadataDirective))
		{
			return false;
		}
		return ($this->MetadataDirective = $_metadataDirective);
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
	 * Get CopySourceIfModifiedSince value
	 * @return dateTime|null
	 */
	public function getCopySourceIfModifiedSince()
	{
		return $this->CopySourceIfModifiedSince;
	}
	/**
	 * Set CopySourceIfModifiedSince value
	 * @param dateTime $_copySourceIfModifiedSince the CopySourceIfModifiedSince
	 * @return dateTime
	 */
	public function setCopySourceIfModifiedSince($_copySourceIfModifiedSince)
	{
		return ($this->CopySourceIfModifiedSince = $_copySourceIfModifiedSince);
	}
	/**
	 * Get CopySourceIfUnmodifiedSince value
	 * @return dateTime|null
	 */
	public function getCopySourceIfUnmodifiedSince()
	{
		return $this->CopySourceIfUnmodifiedSince;
	}
	/**
	 * Set CopySourceIfUnmodifiedSince value
	 * @param dateTime $_copySourceIfUnmodifiedSince the CopySourceIfUnmodifiedSince
	 * @return dateTime
	 */
	public function setCopySourceIfUnmodifiedSince($_copySourceIfUnmodifiedSince)
	{
		return ($this->CopySourceIfUnmodifiedSince = $_copySourceIfUnmodifiedSince);
	}
	/**
	 * Get CopySourceIfMatch value
	 * @return string|null
	 */
	public function getCopySourceIfMatch()
	{
		return $this->CopySourceIfMatch;
	}
	/**
	 * Set CopySourceIfMatch value
	 * @param string $_copySourceIfMatch the CopySourceIfMatch
	 * @return string
	 */
	public function setCopySourceIfMatch($_copySourceIfMatch)
	{
		return ($this->CopySourceIfMatch = $_copySourceIfMatch);
	}
	/**
	 * Get CopySourceIfNoneMatch value
	 * @return string|null
	 */
	public function getCopySourceIfNoneMatch()
	{
		return $this->CopySourceIfNoneMatch;
	}
	/**
	 * Set CopySourceIfNoneMatch value
	 * @param string $_copySourceIfNoneMatch the CopySourceIfNoneMatch
	 * @return string
	 */
	public function setCopySourceIfNoneMatch($_copySourceIfNoneMatch)
	{
		return ($this->CopySourceIfNoneMatch = $_copySourceIfNoneMatch);
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
	 * @return AmazonS3StructCopyObject
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
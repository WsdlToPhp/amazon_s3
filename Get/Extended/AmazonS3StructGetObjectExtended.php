<?php
/**
 * File for class AmazonS3StructGetObjectExtended
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructGetObjectExtended originally named GetObjectExtended
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructGetObjectExtended extends AmazonS3WsdlClass
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
	 * The GetMetadata
	 * @var boolean
	 */
	public $GetMetadata;
	/**
	 * The GetData
	 * @var boolean
	 */
	public $GetData;
	/**
	 * The InlineData
	 * @var boolean
	 */
	public $InlineData;
	/**
	 * The ByteRangeStart
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var long
	 */
	public $ByteRangeStart;
	/**
	 * The ByteRangeEnd
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var long
	 */
	public $ByteRangeEnd;
	/**
	 * The IfModifiedSince
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $IfModifiedSince;
	/**
	 * The IfUnmodifiedSince
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $IfUnmodifiedSince;
	/**
	 * The IfMatch
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 100
	 * - minOccurs : 0
	 * @var string
	 */
	public $IfMatch;
	/**
	 * The IfNoneMatch
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 100
	 * - minOccurs : 0
	 * @var string
	 */
	public $IfNoneMatch;
	/**
	 * The ReturnCompleteObjectOnConditionFailure
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $ReturnCompleteObjectOnConditionFailure;
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
	 * Constructor method for GetObjectExtended
	 * @see parent::__construct()
	 * @param string $_bucket
	 * @param string $_key
	 * @param boolean $_getMetadata
	 * @param boolean $_getData
	 * @param boolean $_inlineData
	 * @param long $_byteRangeStart
	 * @param long $_byteRangeEnd
	 * @param dateTime $_ifModifiedSince
	 * @param dateTime $_ifUnmodifiedSince
	 * @param string $_ifMatch
	 * @param string $_ifNoneMatch
	 * @param boolean $_returnCompleteObjectOnConditionFailure
	 * @param string $_aWSAccessKeyId
	 * @param dateTime $_timestamp
	 * @param string $_signature
	 * @param string $_credential
	 * @return AmazonS3StructGetObjectExtended
	 */
	public function __construct($_bucket = NULL,$_key = NULL,$_getMetadata = NULL,$_getData = NULL,$_inlineData = NULL,$_byteRangeStart = NULL,$_byteRangeEnd = NULL,$_ifModifiedSince = NULL,$_ifUnmodifiedSince = NULL,$_ifMatch = NULL,$_ifNoneMatch = NULL,$_returnCompleteObjectOnConditionFailure = NULL,$_aWSAccessKeyId = NULL,$_timestamp = NULL,$_signature = NULL,$_credential = NULL)
	{
		parent::__construct(array('Bucket'=>$_bucket,'Key'=>$_key,'GetMetadata'=>$_getMetadata,'GetData'=>$_getData,'InlineData'=>$_inlineData,'ByteRangeStart'=>$_byteRangeStart,'ByteRangeEnd'=>$_byteRangeEnd,'IfModifiedSince'=>$_ifModifiedSince,'IfUnmodifiedSince'=>$_ifUnmodifiedSince,'IfMatch'=>$_ifMatch,'IfNoneMatch'=>$_ifNoneMatch,'ReturnCompleteObjectOnConditionFailure'=>$_returnCompleteObjectOnConditionFailure,'AWSAccessKeyId'=>$_aWSAccessKeyId,'Timestamp'=>$_timestamp,'Signature'=>$_signature,'Credential'=>$_credential));
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
	 * Get GetMetadata value
	 * @return boolean|null
	 */
	public function getGetMetadata()
	{
		return $this->GetMetadata;
	}
	/**
	 * Set GetMetadata value
	 * @param boolean $_getMetadata the GetMetadata
	 * @return boolean
	 */
	public function setGetMetadata($_getMetadata)
	{
		return ($this->GetMetadata = $_getMetadata);
	}
	/**
	 * Get GetData value
	 * @return boolean|null
	 */
	public function getGetData()
	{
		return $this->GetData;
	}
	/**
	 * Set GetData value
	 * @param boolean $_getData the GetData
	 * @return boolean
	 */
	public function setGetData($_getData)
	{
		return ($this->GetData = $_getData);
	}
	/**
	 * Get InlineData value
	 * @return boolean|null
	 */
	public function getInlineData()
	{
		return $this->InlineData;
	}
	/**
	 * Set InlineData value
	 * @param boolean $_inlineData the InlineData
	 * @return boolean
	 */
	public function setInlineData($_inlineData)
	{
		return ($this->InlineData = $_inlineData);
	}
	/**
	 * Get ByteRangeStart value
	 * @return long|null
	 */
	public function getByteRangeStart()
	{
		return $this->ByteRangeStart;
	}
	/**
	 * Set ByteRangeStart value
	 * @param long $_byteRangeStart the ByteRangeStart
	 * @return long
	 */
	public function setByteRangeStart($_byteRangeStart)
	{
		return ($this->ByteRangeStart = $_byteRangeStart);
	}
	/**
	 * Get ByteRangeEnd value
	 * @return long|null
	 */
	public function getByteRangeEnd()
	{
		return $this->ByteRangeEnd;
	}
	/**
	 * Set ByteRangeEnd value
	 * @param long $_byteRangeEnd the ByteRangeEnd
	 * @return long
	 */
	public function setByteRangeEnd($_byteRangeEnd)
	{
		return ($this->ByteRangeEnd = $_byteRangeEnd);
	}
	/**
	 * Get IfModifiedSince value
	 * @return dateTime|null
	 */
	public function getIfModifiedSince()
	{
		return $this->IfModifiedSince;
	}
	/**
	 * Set IfModifiedSince value
	 * @param dateTime $_ifModifiedSince the IfModifiedSince
	 * @return dateTime
	 */
	public function setIfModifiedSince($_ifModifiedSince)
	{
		return ($this->IfModifiedSince = $_ifModifiedSince);
	}
	/**
	 * Get IfUnmodifiedSince value
	 * @return dateTime|null
	 */
	public function getIfUnmodifiedSince()
	{
		return $this->IfUnmodifiedSince;
	}
	/**
	 * Set IfUnmodifiedSince value
	 * @param dateTime $_ifUnmodifiedSince the IfUnmodifiedSince
	 * @return dateTime
	 */
	public function setIfUnmodifiedSince($_ifUnmodifiedSince)
	{
		return ($this->IfUnmodifiedSince = $_ifUnmodifiedSince);
	}
	/**
	 * Get IfMatch value
	 * @return string|null
	 */
	public function getIfMatch()
	{
		return $this->IfMatch;
	}
	/**
	 * Set IfMatch value
	 * @param string $_ifMatch the IfMatch
	 * @return string
	 */
	public function setIfMatch($_ifMatch)
	{
		return ($this->IfMatch = $_ifMatch);
	}
	/**
	 * Get IfNoneMatch value
	 * @return string|null
	 */
	public function getIfNoneMatch()
	{
		return $this->IfNoneMatch;
	}
	/**
	 * Set IfNoneMatch value
	 * @param string $_ifNoneMatch the IfNoneMatch
	 * @return string
	 */
	public function setIfNoneMatch($_ifNoneMatch)
	{
		return ($this->IfNoneMatch = $_ifNoneMatch);
	}
	/**
	 * Get ReturnCompleteObjectOnConditionFailure value
	 * @return boolean|null
	 */
	public function getReturnCompleteObjectOnConditionFailure()
	{
		return $this->ReturnCompleteObjectOnConditionFailure;
	}
	/**
	 * Set ReturnCompleteObjectOnConditionFailure value
	 * @param boolean $_returnCompleteObjectOnConditionFailure the ReturnCompleteObjectOnConditionFailure
	 * @return boolean
	 */
	public function setReturnCompleteObjectOnConditionFailure($_returnCompleteObjectOnConditionFailure)
	{
		return ($this->ReturnCompleteObjectOnConditionFailure = $_returnCompleteObjectOnConditionFailure);
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
	 * @return AmazonS3StructGetObjectExtended
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
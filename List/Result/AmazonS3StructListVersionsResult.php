<?php
/**
 * File for class AmazonS3StructListVersionsResult
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructListVersionsResult originally named ListVersionsResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructListVersionsResult extends AmazonS3WsdlClass
{
	/**
	 * The Metadata
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var AmazonS3StructMetadataEntry
	 */
	public $Metadata;
	/**
	 * The Name
	 * @var string
	 */
	public $Name;
	/**
	 * The Prefix
	 * @var string
	 */
	public $Prefix;
	/**
	 * The KeyMarker
	 * @var string
	 */
	public $KeyMarker;
	/**
	 * The VersionIdMarker
	 * @var string
	 */
	public $VersionIdMarker;
	/**
	 * The NextKeyMarker
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $NextKeyMarker;
	/**
	 * The NextVersionIdMarker
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $NextVersionIdMarker;
	/**
	 * The MaxKeys
	 * @var int
	 */
	public $MaxKeys;
	/**
	 * The Delimiter
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $Delimiter;
	/**
	 * The IsTruncated
	 * @var boolean
	 */
	public $IsTruncated;
	/**
	 * The Version
	 * @var AmazonS3StructVersionEntry
	 */
	public $Version;
	/**
	 * The DeleteMarker
	 * @var AmazonS3StructDeleteMarkerEntry
	 */
	public $DeleteMarker;
	/**
	 * The CommonPrefixes
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var AmazonS3StructPrefixEntry
	 */
	public $CommonPrefixes;
	/**
	 * Constructor method for ListVersionsResult
	 * @see parent::__construct()
	 * @param AmazonS3StructMetadataEntry $_metadata
	 * @param string $_name
	 * @param string $_prefix
	 * @param string $_keyMarker
	 * @param string $_versionIdMarker
	 * @param string $_nextKeyMarker
	 * @param string $_nextVersionIdMarker
	 * @param int $_maxKeys
	 * @param string $_delimiter
	 * @param boolean $_isTruncated
	 * @param AmazonS3StructVersionEntry $_version
	 * @param AmazonS3StructDeleteMarkerEntry $_deleteMarker
	 * @param AmazonS3StructPrefixEntry $_commonPrefixes
	 * @return AmazonS3StructListVersionsResult
	 */
	public function __construct($_metadata = NULL,$_name = NULL,$_prefix = NULL,$_keyMarker = NULL,$_versionIdMarker = NULL,$_nextKeyMarker = NULL,$_nextVersionIdMarker = NULL,$_maxKeys = NULL,$_delimiter = NULL,$_isTruncated = NULL,$_version = NULL,$_deleteMarker = NULL,$_commonPrefixes = NULL)
	{
		parent::__construct(array('Metadata'=>$_metadata,'Name'=>$_name,'Prefix'=>$_prefix,'KeyMarker'=>$_keyMarker,'VersionIdMarker'=>$_versionIdMarker,'NextKeyMarker'=>$_nextKeyMarker,'NextVersionIdMarker'=>$_nextVersionIdMarker,'MaxKeys'=>$_maxKeys,'Delimiter'=>$_delimiter,'IsTruncated'=>$_isTruncated,'Version'=>$_version,'DeleteMarker'=>$_deleteMarker,'CommonPrefixes'=>$_commonPrefixes));
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
	 * Get Name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Name value
	 * @param string $_name the Name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->Name = $_name);
	}
	/**
	 * Get Prefix value
	 * @return string|null
	 */
	public function getPrefix()
	{
		return $this->Prefix;
	}
	/**
	 * Set Prefix value
	 * @param string $_prefix the Prefix
	 * @return string
	 */
	public function setPrefix($_prefix)
	{
		return ($this->Prefix = $_prefix);
	}
	/**
	 * Get KeyMarker value
	 * @return string|null
	 */
	public function getKeyMarker()
	{
		return $this->KeyMarker;
	}
	/**
	 * Set KeyMarker value
	 * @param string $_keyMarker the KeyMarker
	 * @return string
	 */
	public function setKeyMarker($_keyMarker)
	{
		return ($this->KeyMarker = $_keyMarker);
	}
	/**
	 * Get VersionIdMarker value
	 * @return string|null
	 */
	public function getVersionIdMarker()
	{
		return $this->VersionIdMarker;
	}
	/**
	 * Set VersionIdMarker value
	 * @param string $_versionIdMarker the VersionIdMarker
	 * @return string
	 */
	public function setVersionIdMarker($_versionIdMarker)
	{
		return ($this->VersionIdMarker = $_versionIdMarker);
	}
	/**
	 * Get NextKeyMarker value
	 * @return string|null
	 */
	public function getNextKeyMarker()
	{
		return $this->NextKeyMarker;
	}
	/**
	 * Set NextKeyMarker value
	 * @param string $_nextKeyMarker the NextKeyMarker
	 * @return string
	 */
	public function setNextKeyMarker($_nextKeyMarker)
	{
		return ($this->NextKeyMarker = $_nextKeyMarker);
	}
	/**
	 * Get NextVersionIdMarker value
	 * @return string|null
	 */
	public function getNextVersionIdMarker()
	{
		return $this->NextVersionIdMarker;
	}
	/**
	 * Set NextVersionIdMarker value
	 * @param string $_nextVersionIdMarker the NextVersionIdMarker
	 * @return string
	 */
	public function setNextVersionIdMarker($_nextVersionIdMarker)
	{
		return ($this->NextVersionIdMarker = $_nextVersionIdMarker);
	}
	/**
	 * Get MaxKeys value
	 * @return int|null
	 */
	public function getMaxKeys()
	{
		return $this->MaxKeys;
	}
	/**
	 * Set MaxKeys value
	 * @param int $_maxKeys the MaxKeys
	 * @return int
	 */
	public function setMaxKeys($_maxKeys)
	{
		return ($this->MaxKeys = $_maxKeys);
	}
	/**
	 * Get Delimiter value
	 * @return string|null
	 */
	public function getDelimiter()
	{
		return $this->Delimiter;
	}
	/**
	 * Set Delimiter value
	 * @param string $_delimiter the Delimiter
	 * @return string
	 */
	public function setDelimiter($_delimiter)
	{
		return ($this->Delimiter = $_delimiter);
	}
	/**
	 * Get IsTruncated value
	 * @return boolean|null
	 */
	public function getIsTruncated()
	{
		return $this->IsTruncated;
	}
	/**
	 * Set IsTruncated value
	 * @param boolean $_isTruncated the IsTruncated
	 * @return boolean
	 */
	public function setIsTruncated($_isTruncated)
	{
		return ($this->IsTruncated = $_isTruncated);
	}
	/**
	 * Get Version value
	 * @return AmazonS3StructVersionEntry|null
	 */
	public function getVersion()
	{
		return $this->Version;
	}
	/**
	 * Set Version value
	 * @param AmazonS3StructVersionEntry $_version the Version
	 * @return AmazonS3StructVersionEntry
	 */
	public function setVersion($_version)
	{
		return ($this->Version = $_version);
	}
	/**
	 * Get DeleteMarker value
	 * @return AmazonS3StructDeleteMarkerEntry|null
	 */
	public function getDeleteMarker()
	{
		return $this->DeleteMarker;
	}
	/**
	 * Set DeleteMarker value
	 * @param AmazonS3StructDeleteMarkerEntry $_deleteMarker the DeleteMarker
	 * @return AmazonS3StructDeleteMarkerEntry
	 */
	public function setDeleteMarker($_deleteMarker)
	{
		return ($this->DeleteMarker = $_deleteMarker);
	}
	/**
	 * Get CommonPrefixes value
	 * @return AmazonS3StructPrefixEntry|null
	 */
	public function getCommonPrefixes()
	{
		return $this->CommonPrefixes;
	}
	/**
	 * Set CommonPrefixes value
	 * @param AmazonS3StructPrefixEntry $_commonPrefixes the CommonPrefixes
	 * @return AmazonS3StructPrefixEntry
	 */
	public function setCommonPrefixes($_commonPrefixes)
	{
		return ($this->CommonPrefixes = $_commonPrefixes);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructListVersionsResult
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
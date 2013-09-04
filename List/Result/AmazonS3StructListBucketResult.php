<?php
/**
 * File for class AmazonS3StructListBucketResult
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructListBucketResult originally named ListBucketResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructListBucketResult extends AmazonS3WsdlClass
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
	 * The Marker
	 * @var string
	 */
	public $Marker;
	/**
	 * The NextMarker
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $NextMarker;
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
	 * The Contents
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var AmazonS3StructListEntry
	 */
	public $Contents;
	/**
	 * The CommonPrefixes
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var AmazonS3StructPrefixEntry
	 */
	public $CommonPrefixes;
	/**
	 * Constructor method for ListBucketResult
	 * @see parent::__construct()
	 * @param AmazonS3StructMetadataEntry $_metadata
	 * @param string $_name
	 * @param string $_prefix
	 * @param string $_marker
	 * @param string $_nextMarker
	 * @param int $_maxKeys
	 * @param string $_delimiter
	 * @param boolean $_isTruncated
	 * @param AmazonS3StructListEntry $_contents
	 * @param AmazonS3StructPrefixEntry $_commonPrefixes
	 * @return AmazonS3StructListBucketResult
	 */
	public function __construct($_metadata = NULL,$_name = NULL,$_prefix = NULL,$_marker = NULL,$_nextMarker = NULL,$_maxKeys = NULL,$_delimiter = NULL,$_isTruncated = NULL,$_contents = NULL,$_commonPrefixes = NULL)
	{
		parent::__construct(array('Metadata'=>$_metadata,'Name'=>$_name,'Prefix'=>$_prefix,'Marker'=>$_marker,'NextMarker'=>$_nextMarker,'MaxKeys'=>$_maxKeys,'Delimiter'=>$_delimiter,'IsTruncated'=>$_isTruncated,'Contents'=>$_contents,'CommonPrefixes'=>$_commonPrefixes));
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
	 * Get Marker value
	 * @return string|null
	 */
	public function getMarker()
	{
		return $this->Marker;
	}
	/**
	 * Set Marker value
	 * @param string $_marker the Marker
	 * @return string
	 */
	public function setMarker($_marker)
	{
		return ($this->Marker = $_marker);
	}
	/**
	 * Get NextMarker value
	 * @return string|null
	 */
	public function getNextMarker()
	{
		return $this->NextMarker;
	}
	/**
	 * Set NextMarker value
	 * @param string $_nextMarker the NextMarker
	 * @return string
	 */
	public function setNextMarker($_nextMarker)
	{
		return ($this->NextMarker = $_nextMarker);
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
	 * Get Contents value
	 * @return AmazonS3StructListEntry|null
	 */
	public function getContents()
	{
		return $this->Contents;
	}
	/**
	 * Set Contents value
	 * @param AmazonS3StructListEntry $_contents the Contents
	 * @return AmazonS3StructListEntry
	 */
	public function setContents($_contents)
	{
		return ($this->Contents = $_contents);
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
	 * @return AmazonS3StructListBucketResult
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
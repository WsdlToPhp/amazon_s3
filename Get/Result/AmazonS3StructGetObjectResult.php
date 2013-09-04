<?php
/**
 * File for class AmazonS3StructGetObjectResult
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructGetObjectResult originally named GetObjectResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructGetObjectResult extends AmazonS3StructResult
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
	 * The Data
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var base64Binary
	 */
	public $Data;
	/**
	 * The LastModified
	 * @var dateTime
	 */
	public $LastModified;
	/**
	 * The ETag
	 * @var string
	 */
	public $ETag;
	/**
	 * Constructor method for GetObjectResult
	 * @see parent::__construct()
	 * @param AmazonS3StructMetadataEntry $_metadata
	 * @param base64Binary $_data
	 * @param dateTime $_lastModified
	 * @param string $_eTag
	 * @return AmazonS3StructGetObjectResult
	 */
	public function __construct($_metadata = NULL,$_data = NULL,$_lastModified = NULL,$_eTag = NULL)
	{
		AmazonS3WsdlClass::__construct(array('Metadata'=>$_metadata,'Data'=>$_data,'LastModified'=>$_lastModified,'ETag'=>$_eTag));
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
	 * Get Data value
	 * @return base64Binary|null
	 */
	public function getData()
	{
		return $this->Data;
	}
	/**
	 * Set Data value
	 * @param base64Binary $_data the Data
	 * @return base64Binary
	 */
	public function setData($_data)
	{
		return ($this->Data = $_data);
	}
	/**
	 * Get LastModified value
	 * @return dateTime|null
	 */
	public function getLastModified()
	{
		return $this->LastModified;
	}
	/**
	 * Set LastModified value
	 * @param dateTime $_lastModified the LastModified
	 * @return dateTime
	 */
	public function setLastModified($_lastModified)
	{
		return ($this->LastModified = $_lastModified);
	}
	/**
	 * Get ETag value
	 * @return string|null
	 */
	public function getETag()
	{
		return $this->ETag;
	}
	/**
	 * Set ETag value
	 * @param string $_eTag the ETag
	 * @return string
	 */
	public function setETag($_eTag)
	{
		return ($this->ETag = $_eTag);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructGetObjectResult
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
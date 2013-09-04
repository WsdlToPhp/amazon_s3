<?php
/**
 * File for class AmazonS3StructPostResponse
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructPostResponse originally named PostResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructPostResponse extends AmazonS3WsdlClass
{
	/**
	 * The Location
	 * @var anyURI
	 */
	public $Location;
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
	 * The ETag
	 * @var string
	 */
	public $ETag;
	/**
	 * Constructor method for PostResponse
	 * @see parent::__construct()
	 * @param anyURI $_location
	 * @param string $_bucket
	 * @param string $_key
	 * @param string $_eTag
	 * @return AmazonS3StructPostResponse
	 */
	public function __construct($_location = NULL,$_bucket = NULL,$_key = NULL,$_eTag = NULL)
	{
		parent::__construct(array('Location'=>$_location,'Bucket'=>$_bucket,'Key'=>$_key,'ETag'=>$_eTag));
	}
	/**
	 * Get Location value
	 * @return anyURI|null
	 */
	public function getLocation()
	{
		return $this->Location;
	}
	/**
	 * Set Location value
	 * @param anyURI $_location the Location
	 * @return anyURI
	 */
	public function setLocation($_location)
	{
		return ($this->Location = $_location);
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
	 * @return AmazonS3StructPostResponse
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
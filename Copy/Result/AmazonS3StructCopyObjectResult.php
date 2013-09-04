<?php
/**
 * File for class AmazonS3StructCopyObjectResult
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructCopyObjectResult originally named CopyObjectResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructCopyObjectResult extends AmazonS3WsdlClass
{
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
	 * Constructor method for CopyObjectResult
	 * @see parent::__construct()
	 * @param dateTime $_lastModified
	 * @param string $_eTag
	 * @return AmazonS3StructCopyObjectResult
	 */
	public function __construct($_lastModified = NULL,$_eTag = NULL)
	{
		parent::__construct(array('LastModified'=>$_lastModified,'ETag'=>$_eTag));
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
	 * @return AmazonS3StructCopyObjectResult
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
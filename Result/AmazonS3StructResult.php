<?php
/**
 * File for class AmazonS3StructResult
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructResult originally named Result
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructResult extends AmazonS3WsdlClass
{
	/**
	 * The Status
	 * @var AmazonS3StructStatus
	 */
	public $Status;
	/**
	 * Constructor method for Result
	 * @see parent::__construct()
	 * @param AmazonS3StructStatus $_status
	 * @return AmazonS3StructResult
	 */
	public function __construct($_status = NULL)
	{
		parent::__construct(array('Status'=>$_status));
	}
	/**
	 * Get Status value
	 * @return AmazonS3StructStatus|null
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Status value
	 * @param AmazonS3StructStatus $_status the Status
	 * @return AmazonS3StructStatus
	 */
	public function setStatus($_status)
	{
		return ($this->Status = $_status);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructResult
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
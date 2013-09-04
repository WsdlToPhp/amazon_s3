<?php
/**
 * File for class AmazonS3StructStatus
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructStatus originally named Status
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructStatus extends AmazonS3WsdlClass
{
	/**
	 * The Code
	 * @var int
	 */
	public $Code;
	/**
	 * The Description
	 * @var string
	 */
	public $Description;
	/**
	 * Constructor method for Status
	 * @see parent::__construct()
	 * @param int $_code
	 * @param string $_description
	 * @return AmazonS3StructStatus
	 */
	public function __construct($_code = NULL,$_description = NULL)
	{
		parent::__construct(array('Code'=>$_code,'Description'=>$_description));
	}
	/**
	 * Get Code value
	 * @return int|null
	 */
	public function getCode()
	{
		return $this->Code;
	}
	/**
	 * Set Code value
	 * @param int $_code the Code
	 * @return int
	 */
	public function setCode($_code)
	{
		return ($this->Code = $_code);
	}
	/**
	 * Get Description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Description value
	 * @param string $_description the Description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->Description = $_description);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructStatus
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
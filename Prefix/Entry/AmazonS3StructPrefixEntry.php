<?php
/**
 * File for class AmazonS3StructPrefixEntry
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructPrefixEntry originally named PrefixEntry
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructPrefixEntry extends AmazonS3WsdlClass
{
	/**
	 * The Prefix
	 * @var string
	 */
	public $Prefix;
	/**
	 * Constructor method for PrefixEntry
	 * @see parent::__construct()
	 * @param string $_prefix
	 * @return AmazonS3StructPrefixEntry
	 */
	public function __construct($_prefix = NULL)
	{
		parent::__construct(array('Prefix'=>$_prefix));
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructPrefixEntry
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
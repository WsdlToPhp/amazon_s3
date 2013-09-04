<?php
/**
 * File for class AmazonS3StructGroup
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructGroup originally named Group
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructGroup extends AmazonS3StructGrantee
{
	/**
	 * The URI
	 * @var string
	 */
	public $URI;
	/**
	 * Constructor method for Group
	 * @see parent::__construct()
	 * @param string $_uRI
	 * @return AmazonS3StructGroup
	 */
	public function __construct($_uRI = NULL)
	{
		AmazonS3WsdlClass::__construct(array('URI'=>$_uRI));
	}
	/**
	 * Get URI value
	 * @return string|null
	 */
	public function getURI()
	{
		return $this->URI;
	}
	/**
	 * Set URI value
	 * @param string $_uRI the URI
	 * @return string
	 */
	public function setURI($_uRI)
	{
		return ($this->URI = $_uRI);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructGroup
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
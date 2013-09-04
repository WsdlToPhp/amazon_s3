<?php
/**
 * File for class AmazonS3StructLocationConstraint
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructLocationConstraint originally named LocationConstraint
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructLocationConstraint extends AmazonS3WsdlClass
{
	/**
	 * The _
	 * @var string
	 */
	public $_;
	/**
	 * Constructor method for LocationConstraint
	 * @see parent::__construct()
	 * @param string $__
	 * @return AmazonS3StructLocationConstraint
	 */
	public function __construct($__ = NULL)
	{
		parent::__construct(array('_'=>$__));
	}
	/**
	 * Get _ value
	 * @return string|null
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set _ value
	 * @param string $__ the _
	 * @return string
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructLocationConstraint
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
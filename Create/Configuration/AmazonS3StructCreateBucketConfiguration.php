<?php
/**
 * File for class AmazonS3StructCreateBucketConfiguration
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructCreateBucketConfiguration originally named CreateBucketConfiguration
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructCreateBucketConfiguration extends AmazonS3WsdlClass
{
	/**
	 * The LocationConstraint
	 * @var AmazonS3StructLocationConstraint
	 */
	public $LocationConstraint;
	/**
	 * Constructor method for CreateBucketConfiguration
	 * @see parent::__construct()
	 * @param AmazonS3StructLocationConstraint $_locationConstraint
	 * @return AmazonS3StructCreateBucketConfiguration
	 */
	public function __construct($_locationConstraint = NULL)
	{
		parent::__construct(array('LocationConstraint'=>$_locationConstraint));
	}
	/**
	 * Get LocationConstraint value
	 * @return AmazonS3StructLocationConstraint|null
	 */
	public function getLocationConstraint()
	{
		return $this->LocationConstraint;
	}
	/**
	 * Set LocationConstraint value
	 * @param AmazonS3StructLocationConstraint $_locationConstraint the LocationConstraint
	 * @return AmazonS3StructLocationConstraint
	 */
	public function setLocationConstraint($_locationConstraint)
	{
		return ($this->LocationConstraint = $_locationConstraint);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructCreateBucketConfiguration
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
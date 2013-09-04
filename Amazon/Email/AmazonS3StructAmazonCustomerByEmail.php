<?php
/**
 * File for class AmazonS3StructAmazonCustomerByEmail
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructAmazonCustomerByEmail originally named AmazonCustomerByEmail
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructAmazonCustomerByEmail extends AmazonS3StructUser
{
	/**
	 * The EmailAddress
	 * @var string
	 */
	public $EmailAddress;
	/**
	 * Constructor method for AmazonCustomerByEmail
	 * @see parent::__construct()
	 * @param string $_emailAddress
	 * @return AmazonS3StructAmazonCustomerByEmail
	 */
	public function __construct($_emailAddress = NULL)
	{
		AmazonS3WsdlClass::__construct(array('EmailAddress'=>$_emailAddress));
	}
	/**
	 * Get EmailAddress value
	 * @return string|null
	 */
	public function getEmailAddress()
	{
		return $this->EmailAddress;
	}
	/**
	 * Set EmailAddress value
	 * @param string $_emailAddress the EmailAddress
	 * @return string
	 */
	public function setEmailAddress($_emailAddress)
	{
		return ($this->EmailAddress = $_emailAddress);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructAmazonCustomerByEmail
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
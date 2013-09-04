<?php
/**
 * File for class AmazonS3StructRequestPaymentConfiguration
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructRequestPaymentConfiguration originally named RequestPaymentConfiguration
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructRequestPaymentConfiguration extends AmazonS3WsdlClass
{
	/**
	 * The Payer
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var AmazonS3EnumPayer
	 */
	public $Payer;
	/**
	 * Constructor method for RequestPaymentConfiguration
	 * @see parent::__construct()
	 * @param AmazonS3EnumPayer $_payer
	 * @return AmazonS3StructRequestPaymentConfiguration
	 */
	public function __construct($_payer)
	{
		parent::__construct(array('Payer'=>$_payer));
	}
	/**
	 * Get Payer value
	 * @return AmazonS3EnumPayer
	 */
	public function getPayer()
	{
		return $this->Payer;
	}
	/**
	 * Set Payer value
	 * @uses AmazonS3EnumPayer::valueIsValid()
	 * @param AmazonS3EnumPayer $_payer the Payer
	 * @return AmazonS3EnumPayer
	 */
	public function setPayer($_payer)
	{
		if(!AmazonS3EnumPayer::valueIsValid($_payer))
		{
			return false;
		}
		return ($this->Payer = $_payer);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructRequestPaymentConfiguration
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
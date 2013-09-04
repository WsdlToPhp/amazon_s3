<?php
/**
 * File for class AmazonS3EnumMfaDeleteStatus
 * @package AmazonS3
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3EnumMfaDeleteStatus originally named MfaDeleteStatus
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3EnumMfaDeleteStatus extends AmazonS3WsdlClass
{
	/**
	 * Constant for value 'Enabled'
	 * @return string 'Enabled'
	 */
	const VALUE_ENABLED = 'Enabled';
	/**
	 * Constant for value 'Disabled'
	 * @return string 'Disabled'
	 */
	const VALUE_DISABLED = 'Disabled';
	/**
	 * Return true if value is allowed
	 * @uses AmazonS3EnumMfaDeleteStatus::VALUE_ENABLED
	 * @uses AmazonS3EnumMfaDeleteStatus::VALUE_DISABLED
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(AmazonS3EnumMfaDeleteStatus::VALUE_ENABLED,AmazonS3EnumMfaDeleteStatus::VALUE_DISABLED));
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
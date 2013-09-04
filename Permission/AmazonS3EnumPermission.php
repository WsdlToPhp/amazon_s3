<?php
/**
 * File for class AmazonS3EnumPermission
 * @package AmazonS3
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3EnumPermission originally named Permission
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3EnumPermission extends AmazonS3WsdlClass
{
	/**
	 * Constant for value 'READ'
	 * @return string 'READ'
	 */
	const VALUE_READ = 'READ';
	/**
	 * Constant for value 'WRITE'
	 * @return string 'WRITE'
	 */
	const VALUE_WRITE = 'WRITE';
	/**
	 * Constant for value 'READ_ACP'
	 * @return string 'READ_ACP'
	 */
	const VALUE_READ_ACP = 'READ_ACP';
	/**
	 * Constant for value 'WRITE_ACP'
	 * @return string 'WRITE_ACP'
	 */
	const VALUE_WRITE_ACP = 'WRITE_ACP';
	/**
	 * Constant for value 'FULL_CONTROL'
	 * @return string 'FULL_CONTROL'
	 */
	const VALUE_FULL_CONTROL = 'FULL_CONTROL';
	/**
	 * Return true if value is allowed
	 * @uses AmazonS3EnumPermission::VALUE_READ
	 * @uses AmazonS3EnumPermission::VALUE_WRITE
	 * @uses AmazonS3EnumPermission::VALUE_READ_ACP
	 * @uses AmazonS3EnumPermission::VALUE_WRITE_ACP
	 * @uses AmazonS3EnumPermission::VALUE_FULL_CONTROL
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(AmazonS3EnumPermission::VALUE_READ,AmazonS3EnumPermission::VALUE_WRITE,AmazonS3EnumPermission::VALUE_READ_ACP,AmazonS3EnumPermission::VALUE_WRITE_ACP,AmazonS3EnumPermission::VALUE_FULL_CONTROL));
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
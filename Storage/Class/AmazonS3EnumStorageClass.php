<?php
/**
 * File for class AmazonS3EnumStorageClass
 * @package AmazonS3
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3EnumStorageClass originally named StorageClass
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3EnumStorageClass extends AmazonS3WsdlClass
{
	/**
	 * Constant for value 'STANDARD'
	 * @return string 'STANDARD'
	 */
	const VALUE_STANDARD = 'STANDARD';
	/**
	 * Constant for value 'REDUCED_REDUNDANCY'
	 * @return string 'REDUCED_REDUNDANCY'
	 */
	const VALUE_REDUCED_REDUNDANCY = 'REDUCED_REDUNDANCY';
	/**
	 * Constant for value 'GLACIER'
	 * @return string 'GLACIER'
	 */
	const VALUE_GLACIER = 'GLACIER';
	/**
	 * Constant for value 'UNKNOWN'
	 * @return string 'UNKNOWN'
	 */
	const VALUE_UNKNOWN = 'UNKNOWN';
	/**
	 * Return true if value is allowed
	 * @uses AmazonS3EnumStorageClass::VALUE_STANDARD
	 * @uses AmazonS3EnumStorageClass::VALUE_REDUCED_REDUNDANCY
	 * @uses AmazonS3EnumStorageClass::VALUE_GLACIER
	 * @uses AmazonS3EnumStorageClass::VALUE_UNKNOWN
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(AmazonS3EnumStorageClass::VALUE_STANDARD,AmazonS3EnumStorageClass::VALUE_REDUCED_REDUNDANCY,AmazonS3EnumStorageClass::VALUE_GLACIER,AmazonS3EnumStorageClass::VALUE_UNKNOWN));
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
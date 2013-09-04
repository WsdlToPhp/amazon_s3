<?php
/**
 * File for class AmazonS3EnumMetadataDirective
 * @package AmazonS3
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3EnumMetadataDirective originally named MetadataDirective
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3EnumMetadataDirective extends AmazonS3WsdlClass
{
	/**
	 * Constant for value 'COPY'
	 * @return string 'COPY'
	 */
	const VALUE_COPY = 'COPY';
	/**
	 * Constant for value 'REPLACE'
	 * @return string 'REPLACE'
	 */
	const VALUE_REPLACE = 'REPLACE';
	/**
	 * Return true if value is allowed
	 * @uses AmazonS3EnumMetadataDirective::VALUE_COPY
	 * @uses AmazonS3EnumMetadataDirective::VALUE_REPLACE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(AmazonS3EnumMetadataDirective::VALUE_COPY,AmazonS3EnumMetadataDirective::VALUE_REPLACE));
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
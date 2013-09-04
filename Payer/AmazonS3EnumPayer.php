<?php
/**
 * File for class AmazonS3EnumPayer
 * @package AmazonS3
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3EnumPayer originally named Payer
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3EnumPayer extends AmazonS3WsdlClass
{
	/**
	 * Constant for value 'BucketOwner'
	 * @return string 'BucketOwner'
	 */
	const VALUE_BUCKETOWNER = 'BucketOwner';
	/**
	 * Constant for value 'Requester'
	 * @return string 'Requester'
	 */
	const VALUE_REQUESTER = 'Requester';
	/**
	 * Return true if value is allowed
	 * @uses AmazonS3EnumPayer::VALUE_BUCKETOWNER
	 * @uses AmazonS3EnumPayer::VALUE_REQUESTER
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(AmazonS3EnumPayer::VALUE_BUCKETOWNER,AmazonS3EnumPayer::VALUE_REQUESTER));
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
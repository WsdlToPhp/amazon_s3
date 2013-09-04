<?php
/**
 * File for class AmazonS3StructListAllMyBucketsResult
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructListAllMyBucketsResult originally named ListAllMyBucketsResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructListAllMyBucketsResult extends AmazonS3WsdlClass
{
	/**
	 * The Owner
	 * @var AmazonS3StructCanonicalUser
	 */
	public $Owner;
	/**
	 * The Buckets
	 * @var AmazonS3StructListAllMyBucketsList
	 */
	public $Buckets;
	/**
	 * Constructor method for ListAllMyBucketsResult
	 * @see parent::__construct()
	 * @param AmazonS3StructCanonicalUser $_owner
	 * @param AmazonS3StructListAllMyBucketsList $_buckets
	 * @return AmazonS3StructListAllMyBucketsResult
	 */
	public function __construct($_owner = NULL,$_buckets = NULL)
	{
		parent::__construct(array('Owner'=>$_owner,'Buckets'=>$_buckets));
	}
	/**
	 * Get Owner value
	 * @return AmazonS3StructCanonicalUser|null
	 */
	public function getOwner()
	{
		return $this->Owner;
	}
	/**
	 * Set Owner value
	 * @param AmazonS3StructCanonicalUser $_owner the Owner
	 * @return AmazonS3StructCanonicalUser
	 */
	public function setOwner($_owner)
	{
		return ($this->Owner = $_owner);
	}
	/**
	 * Get Buckets value
	 * @return AmazonS3StructListAllMyBucketsList|null
	 */
	public function getBuckets()
	{
		return $this->Buckets;
	}
	/**
	 * Set Buckets value
	 * @param AmazonS3StructListAllMyBucketsList $_buckets the Buckets
	 * @return AmazonS3StructListAllMyBucketsList
	 */
	public function setBuckets($_buckets)
	{
		return ($this->Buckets = $_buckets);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructListAllMyBucketsResult
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
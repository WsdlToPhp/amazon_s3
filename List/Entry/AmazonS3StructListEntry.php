<?php
/**
 * File for class AmazonS3StructListEntry
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructListEntry originally named ListEntry
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructListEntry extends AmazonS3WsdlClass
{
	/**
	 * The Key
	 * @var string
	 */
	public $Key;
	/**
	 * The LastModified
	 * @var dateTime
	 */
	public $LastModified;
	/**
	 * The ETag
	 * @var string
	 */
	public $ETag;
	/**
	 * The Size
	 * @var long
	 */
	public $Size;
	/**
	 * The Owner
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var AmazonS3StructCanonicalUser
	 */
	public $Owner;
	/**
	 * The StorageClass
	 * @var AmazonS3EnumStorageClass
	 */
	public $StorageClass;
	/**
	 * Constructor method for ListEntry
	 * @see parent::__construct()
	 * @param string $_key
	 * @param dateTime $_lastModified
	 * @param string $_eTag
	 * @param long $_size
	 * @param AmazonS3StructCanonicalUser $_owner
	 * @param AmazonS3EnumStorageClass $_storageClass
	 * @return AmazonS3StructListEntry
	 */
	public function __construct($_key = NULL,$_lastModified = NULL,$_eTag = NULL,$_size = NULL,$_owner = NULL,$_storageClass = NULL)
	{
		parent::__construct(array('Key'=>$_key,'LastModified'=>$_lastModified,'ETag'=>$_eTag,'Size'=>$_size,'Owner'=>$_owner,'StorageClass'=>$_storageClass));
	}
	/**
	 * Get Key value
	 * @return string|null
	 */
	public function getKey()
	{
		return $this->Key;
	}
	/**
	 * Set Key value
	 * @param string $_key the Key
	 * @return string
	 */
	public function setKey($_key)
	{
		return ($this->Key = $_key);
	}
	/**
	 * Get LastModified value
	 * @return dateTime|null
	 */
	public function getLastModified()
	{
		return $this->LastModified;
	}
	/**
	 * Set LastModified value
	 * @param dateTime $_lastModified the LastModified
	 * @return dateTime
	 */
	public function setLastModified($_lastModified)
	{
		return ($this->LastModified = $_lastModified);
	}
	/**
	 * Get ETag value
	 * @return string|null
	 */
	public function getETag()
	{
		return $this->ETag;
	}
	/**
	 * Set ETag value
	 * @param string $_eTag the ETag
	 * @return string
	 */
	public function setETag($_eTag)
	{
		return ($this->ETag = $_eTag);
	}
	/**
	 * Get Size value
	 * @return long|null
	 */
	public function getSize()
	{
		return $this->Size;
	}
	/**
	 * Set Size value
	 * @param long $_size the Size
	 * @return long
	 */
	public function setSize($_size)
	{
		return ($this->Size = $_size);
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
	 * Get StorageClass value
	 * @return AmazonS3EnumStorageClass|null
	 */
	public function getStorageClass()
	{
		return $this->StorageClass;
	}
	/**
	 * Set StorageClass value
	 * @uses AmazonS3EnumStorageClass::valueIsValid()
	 * @param AmazonS3EnumStorageClass $_storageClass the StorageClass
	 * @return AmazonS3EnumStorageClass
	 */
	public function setStorageClass($_storageClass)
	{
		if(!AmazonS3EnumStorageClass::valueIsValid($_storageClass))
		{
			return false;
		}
		return ($this->StorageClass = $_storageClass);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructListEntry
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
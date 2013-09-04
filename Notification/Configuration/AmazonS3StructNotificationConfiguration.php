<?php
/**
 * File for class AmazonS3StructNotificationConfiguration
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructNotificationConfiguration originally named NotificationConfiguration
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructNotificationConfiguration extends AmazonS3WsdlClass
{
	/**
	 * The TopicConfiguration
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var AmazonS3StructTopicConfiguration
	 */
	public $TopicConfiguration;
	/**
	 * Constructor method for NotificationConfiguration
	 * @see parent::__construct()
	 * @param AmazonS3StructTopicConfiguration $_topicConfiguration
	 * @return AmazonS3StructNotificationConfiguration
	 */
	public function __construct($_topicConfiguration = NULL)
	{
		parent::__construct(array('TopicConfiguration'=>$_topicConfiguration));
	}
	/**
	 * Get TopicConfiguration value
	 * @return AmazonS3StructTopicConfiguration|null
	 */
	public function getTopicConfiguration()
	{
		return $this->TopicConfiguration;
	}
	/**
	 * Set TopicConfiguration value
	 * @param AmazonS3StructTopicConfiguration $_topicConfiguration the TopicConfiguration
	 * @return AmazonS3StructTopicConfiguration
	 */
	public function setTopicConfiguration($_topicConfiguration)
	{
		return ($this->TopicConfiguration = $_topicConfiguration);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructNotificationConfiguration
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
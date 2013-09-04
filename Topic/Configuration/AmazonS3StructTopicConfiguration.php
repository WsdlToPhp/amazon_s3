<?php
/**
 * File for class AmazonS3StructTopicConfiguration
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructTopicConfiguration originally named TopicConfiguration
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructTopicConfiguration extends AmazonS3WsdlClass
{
	/**
	 * The Topic
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Topic;
	/**
	 * The Event
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 1
	 * @var string
	 */
	public $Event;
	/**
	 * Constructor method for TopicConfiguration
	 * @see parent::__construct()
	 * @param string $_topic
	 * @param string $_event
	 * @return AmazonS3StructTopicConfiguration
	 */
	public function __construct($_topic,$_event)
	{
		parent::__construct(array('Topic'=>$_topic,'Event'=>$_event));
	}
	/**
	 * Get Topic value
	 * @return string
	 */
	public function getTopic()
	{
		return $this->Topic;
	}
	/**
	 * Set Topic value
	 * @param string $_topic the Topic
	 * @return string
	 */
	public function setTopic($_topic)
	{
		return ($this->Topic = $_topic);
	}
	/**
	 * Get Event value
	 * @return string
	 */
	public function getEvent()
	{
		return $this->Event;
	}
	/**
	 * Set Event value
	 * @param string $_event the Event
	 * @return string
	 */
	public function setEvent($_event)
	{
		return ($this->Event = $_event);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructTopicConfiguration
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
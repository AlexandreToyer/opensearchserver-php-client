<?php
namespace OpenSearchServer\Search\Field;

use OpenSearchServer\Search\Field\SearchField;

class Put extends SearchField
{
	
	/******************************
	 * INHERITED METHODS OVERRIDDEN
	 ******************************/
	/**
	 * {@inheritdoc}
	 */
	public function getMethod()
	{
		return self::METHOD_PUT;
	}
	
	/**
	 * {@inheritdoc}
	 */
	public function getPath()
	{
    	$this->checkPathIndexNeeded();
		if(empty($this->options['index'])) {
    		throw new Exception('Method "template($templateName)" must be called before submitting request.');
    	}
        return $this->options['index'].'/search/field/'.$this->options['template'];
	}
}
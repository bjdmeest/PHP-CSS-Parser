<?php

namespace Sabberworm\CSS\Value;

/**
 * 
 */
class URL extends PrimitiveValue {

    /**
     *
     * @var type 
     */
	private $oURL;

    /**
     * 
     * @param \Sabberworm\CSS\Value\String $oURL
     */
	public function __construct(String $oURL) {
		$this->oURL = $oURL;
	}

    /**
     * 
     * @param \Sabberworm\CSS\Value\String $oURL
     */
	public function setURL(String $oURL) {
		$this->oURL = $oURL;
	}

    /**
     * 
     * @return type
     */
	public function getURL() {
		return $this->oURL;
	}

    /**
     * 
     * @return type
     */
	public function __toString() {
		return "url({$this->oURL->__toString()})";
	}

}
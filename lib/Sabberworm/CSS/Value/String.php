<?php

namespace Sabberworm\CSS\Value;

/**
 * 
 */
class String extends PrimitiveValue {

    /**
     *
     * @var type 
     */
	private $sString;

    /**
     * 
     * @param type $sString
     */
	public function __construct($sString) {
		$this->sString = $sString;
	}

    /**
     * 
     * @param type $sString
     */
	public function setString($sString) {
		$this->sString = $sString;
	}

    /**
     * 
     * @return type
     */
	public function getString() {
		return $this->sString;
	}

    /**
     * 
     * @return type
     */
	public function __toString() {
		$sString = addslashes($this->sString);
		$sString = str_replace("\n", '\A', $sString);
		return '"' . $sString . '"';
	}

}
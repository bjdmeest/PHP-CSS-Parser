<?php

namespace Sabberworm\CSS\Property;

use Sabberworm\CSS\Value\URL;

/**
* Class representing an @import rule.
*/
class Import implements AtRule {
    
    /**
     *
     * @var type 
     */
	private $oLocation;
    
    /**
     *
     * @var type 
     */
	private $sMediaQuery;
	
    /**
     * 
     * @param \Sabberworm\CSS\Value\URL $oLocation
     * @param type $sMediaQuery
     */
	public function __construct(URL $oLocation, $sMediaQuery) {
		$this->oLocation = $oLocation;
		$this->sMediaQuery = $sMediaQuery;
	}
	
    /**
     * 
     * @param type $oLocation
     */
	public function setLocation($oLocation) {
			$this->oLocation = $oLocation;
	}

    /**
     * 
     * @return type
     */
	public function getLocation() {
			return $this->oLocation;
	}
	
    /**
     * 
     * @return type
     */
	public function __toString() {
		return "@import ".$this->oLocation->__toString().($this->sMediaQuery === null ? '' : ' '.$this->sMediaQuery).';';
	}

    /**
     * 
     * @return string
     */
	public function atRuleName() {
		return 'import';
	}

    /**
     * 
     * @return type
     */
	public function atRuleArgs() {
		$aResult = array($this->oLocation);
		if($this->sMediaQuery) {
			array_push($aResult, $this->sMediaQuery);
		}
		return $aResult;
	}
}
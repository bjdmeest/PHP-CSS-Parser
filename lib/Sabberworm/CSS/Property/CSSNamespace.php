<?php

namespace Sabberworm\CSS\Property;

/**
* CSSNamespace represents an @namespace rule.
*/
class CSSNamespace implements AtRule {
    /**
     *
     * @var type 
     */
	private $mUrl;
    
    /**
     *
     * @var type 
     */
	private $sPrefix;
	
    /**
     * 
     * @param type $mUrl
     * @param type $sPrefix
     */
	public function __construct($mUrl, $sPrefix = null) {
		$this->mUrl = $mUrl;
		$this->sPrefix = $sPrefix;
	}
	
    /**
     * 
     * @return type
     */
	public function __toString() {
		return '@namespace '.($this->sPrefix === null ? '' : $this->sPrefix.' ').$this->mUrl->__toString().';';
	}
	
    /**
     * 
     * @return type
     */
	public function getUrl() {
		return $this->mUrl;
	}

    /**
     * 
     * @return type
     */
	public function getPrefix() {
		return $this->sPrefix;
	}

    /**
     * 
     * @param type $mUrl
     */
	public function setUrl($mUrl) {
		$this->mUrl = $mUrl;
	}

    /**
     * 
     * @param type $sPrefix
     */
	public function setPrefix($sPrefix) {
		$this->sPrefix = $sPrefix;
	}

    /**
     * 
     * @return string
     */
	public function atRuleName() {
		return 'namespace';
	}

    /**
     * 
     * @return type
     */
	public function atRuleArgs() {
		$aResult = array($this->mUrl);
		if($this->sPrefix) {
			array_unshift($aResult, $this->sPrefix);
		}
		return $aResult;
	}
}
<?php

namespace Sabberworm\CSS\CSSList;

use Sabberworm\CSS\Property\AtRule;

class KeyFrame extends CSSList implements AtRule {

    /**
     *
     * @var type 
     */
	private $vendorKeyFrame;
    
    /**
     *
     * @var type 
     */
	private $animationName;

    /**
     * 
     */
	public function __construct() {
		parent::__construct();
		$this->vendorKeyFrame = null;
		$this->animationName  = null;
	}

    /**
     * 
     * @param type $vendorKeyFrame
     */
	public function setVendorKeyFrame($vendorKeyFrame) {
		$this->vendorKeyFrame = $vendorKeyFrame;
	}

    /**
     * 
     * @return type
     */
	public function getVendorKeyFrame() {
		return $this->vendorKeyFrame;
	}

    /**
     * 
     * @param type $animationName
     */
	public function setAnimationName($animationName) {
		$this->animationName = $animationName;
	}

    /**
     * 
     * @return type
     */
	public function getAnimationName() {
		return $this->animationName;
	}

    /**
     * 
     * @return string
     */
	public function __toString() {
		$sResult = "@{$this->vendorKeyFrame} {$this->animationName} {";
		$sResult .= parent::__toString();
		$sResult .= '}';
		return $sResult;
	}

    /**
     * 
     * @return type
     */
	public function atRuleName() {
		return $this->vendorKeyFrame;
	}

    /**
     * 
     * @return type
     */
	public function atRuleArgs() {
		return $this->animationName;
	}
}

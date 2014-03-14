<?php

namespace Sabberworm\CSS\Value;

/**
 * 
 */
class CSSFunction extends ValueList {

    /**
     *
     * @var type 
     */
	private $sName;

    /**
     * 
     * @param type $sName
     * @param type $aArguments
     * @param type $sSeparator
     */
	public function __construct($sName, $aArguments, $sSeparator = ',') {
		if($aArguments instanceof RuleValueList) {
			$sSeparator = $aArguments->getListSeparator();
			$aArguments = $aArguments->getListComponents();
		}
		$this->sName = $sName;
		parent::__construct($aArguments, $sSeparator);
	}

    /**
     * 
     * @return type
     */
	public function getName() {
		return $this->sName;
	}

    /**
     * 
     * @param type $sName
     */
	public function setName($sName) {
		$this->sName = $sName;
	}

    /**
     * 
     * @return type
     */
	public function getArguments() {
		return $this->aComponents;
	}

    /**
     * 
     * @return type
     */
	public function __toString() {
		$aArguments = parent::__toString();
		return "{$this->sName}({$aArguments})";
	}

}
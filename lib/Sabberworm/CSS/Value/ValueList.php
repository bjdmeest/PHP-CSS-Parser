<?php

namespace Sabberworm\CSS\Value;

abstract class ValueList extends Value {

    /**
     *
     * @var type 
     */
	protected $aComponents;
    
    /**
     *
     * @var type 
     */
	protected $sSeparator;

    /**
     * 
     * @param type $aComponents
     * @param type $sSeparator
     */
	public function __construct($aComponents = array(), $sSeparator = ',') {
		if (!is_array($aComponents)) {
			$aComponents = array($aComponents);
		}
		$this->aComponents = $aComponents;
		$this->sSeparator = $sSeparator;
	}

    /**
     * 
     * @param type $mComponent
     */
	public function addListComponent($mComponent) {
		$this->aComponents[] = $mComponent;
	}

    /**
     * 
     * @return type
     */
	public function getListComponents() {
		return $this->aComponents;
	}

    /**
     * 
     * @param type $aComponents
     */
	public function setListComponents($aComponents) {
		$this->aComponents = $aComponents;
	}

    /**
     * 
     * @return type
     */
	public function getListSeparator() {
		return $this->sSeparator;
	}

    /**
     * 
     * @param type $sSeparator
     */
	public function setListSeparator($sSeparator) {
		$this->sSeparator = $sSeparator;
	}

    /**
     * 
     * @return type
     */
	function __toString() {
		return implode($this->sSeparator, $this->aComponents);
	}

}

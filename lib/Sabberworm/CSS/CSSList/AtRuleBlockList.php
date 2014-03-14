<?php

namespace Sabberworm\CSS\CSSList;

use Sabberworm\CSS\Property\AtRule;

/**
 * A RuleSet constructed by an unknown @-rule. @font-face rules are rendered into AtRule objects.
 */
class AtRuleBlockList extends CSSBlockList implements AtRule {

	private $sType;
	private $sArgs;

    /**
     * 
     * @param type $sType
     * @param type $sArgs
     */
	public function __construct($sType, $sArgs = '') {
		parent::__construct();
		$this->sType = $sType;
		$this->sArgs = $sArgs;
	}

    /**
     * 
     * @return type
     */
	public function atRuleName() {
		return $this->sType;
	}

    /**
     * 
     * @return type
     */
	public function atRuleArgs() {
		return $this->sArgs;
	}

    /**
     * 
     * @return string
     */
	public function __toString() {
		$sResult = "@{$this->sType} {$this->sArgs}{";
		$sResult .= parent::__toString();
		$sResult .= '}';
		return $sResult;
	}

}
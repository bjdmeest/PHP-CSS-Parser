<?php

namespace Sabberworm\CSS\Value;

/**
 * 
 */
class RuleValueList extends ValueList {

    /**
     * 
     * @param type $sSeparator
     */
	public function __construct($sSeparator = ',') {
		parent::__construct(array(), $sSeparator);
	}

}
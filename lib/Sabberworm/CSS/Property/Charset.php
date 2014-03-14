<?php

namespace Sabberworm\CSS\Property;

/**
 * Class representing an @charset rule.
 * The following restrictions apply:
 * • May not be found in any CSSList other than the Document.
 * • May only appear at the very top of a Document’s contents.
 * • Must not appear more than once.
 */
class Charset implements AtRule {

    /**
     *
     * @var type 
     */
	private $sCharset;

    /**
     * 
     * @param type $sCharset
     */
	public function __construct($sCharset) {
		$this->sCharset = $sCharset;
	}

    /**
     * 
     * @param type $sCharset
     */
	public function setCharset($sCharset) {
		$this->sCharset = $sCharset;
	}

    /**
     * 
     * @return type
     */
	public function getCharset() {
		return $this->sCharset;
	}

    /**
     * 
     * @return type
     */
	public function __toString() {
		return "@charset {$this->sCharset->__toString()};";
	}

    /**
     * 
     * @return string
     */
	public function atRuleName() {
		return 'charset';
	}

    /**
     * 
     * @return type
     */
	public function atRuleArgs() {
		return $this->sCharset;
	}
}
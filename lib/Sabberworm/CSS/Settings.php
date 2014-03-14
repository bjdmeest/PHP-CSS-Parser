<?php

namespace Sabberworm\CSS;

use Sabberworm\CSS\Rule\Rule;

/**
 * Parser settings class.
 *
 * Configure parser behaviour here.
 */
class Settings {
	/**
	* Multi-byte string support. If true (mbstring extension must be enabled), will use (slower) mb_strlen, mb_convert_case, mb_substr and mb_strpos functions. Otherwise, the normal (ASCII-Only) functions will be used.
	*/
	public $bMultibyteSupport;

	/**
	* The default charset for the CSS if no `@charset` rule is found. Defaults to utf-8.
	*/
	public $sDefaultCharset = 'utf-8';

	/**
	* Lenient parsing. When used (which is true by default), the parser will not choke on unexpected tokens but simply ignore them.
	*/
	public $bLenientParsing = true;

    /**
     * 
     */
	private function __construct() {
		$this->bMultibyteSupport = extension_loaded('mbstring');
	}

    /**
     * 
     * @return \Sabberworm\CSS\Settings
     */
	public static function create() {
		return new Settings();
	}
	
    /**
     * 
     * @param type $bMultibyteSupport
     * @return \Sabberworm\CSS\Settings
     */
	public function withMultibyteSupport($bMultibyteSupport = true) {
		$this->bMultibyteSupport = $bMultibyteSupport;
		return $this;
	}
	
    /**
     * 
     * @param type $sDefaultCharset
     * @return \Sabberworm\CSS\Settings
     */
	public function withDefaultCharset($sDefaultCharset) {
		$this->sDefaultCharset = $sDefaultCharset;
		return $this;
	}
	
    /**
     * 
     * @param type $bLenientParsing
     * @return \Sabberworm\CSS\Settings
     */
	public function withLenientParsing($bLenientParsing = true) {
		$this->bLenientParsing = $bLenientParsing;
		return $this;
	}
	
    /**
     * 
     * @return type
     */
	public function beStrict() {
		return $this->withLenientParsing(false);
	}
}
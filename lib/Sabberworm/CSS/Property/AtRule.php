<?php

namespace Sabberworm\CSS\Property;

interface AtRule {
    /**
     * 
     */
	const BLOCK_RULES = 'media/document/supports/region-style/font-feature-values';
	// 
	
    /**
     * Since there are more set rules than block rules, we’re whitelisting the block rules and have anything else be treated as a set rule.
     * …and more font-specific ones (to be used inside font-feature-values)
     */
    const SET_RULES = 'font-face/counter-style/page/swash/styleset/annotation';
	
    /**
     * 
     */
	public function atRuleName();
    
    /**
     * 
     */
	public function atRuleArgs();
    
    /**
     * 
     */
	public function __toString();
}
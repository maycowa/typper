<?php

namespace Typper\Parsers\Content;

use ParsedownExtra;
use Kurenai\Contracts\ContentParser;

/**
 * Class ParseDownExtraParser, a custom Parser for Kurenai, using 
 * ParsedownExtra package
 * 
 * @package \Typper\Parsers\Content
 */
class ParseDownExtraParser implements ContentParser
{
    /**
     * Parse raw content into new format.
     *
     * @param string $content
     *
     * @return string
     */
    public function parse($content)
    {
        return (new ParsedownExtra)->text($content);
    }
}
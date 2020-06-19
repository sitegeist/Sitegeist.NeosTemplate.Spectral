<?php
namespace Sitegeist\NeosTemplate\Spectral\Eel\Helper;

use Neos\Eel\ProtectedContextAwareInterface;
use Neos\Flow\Annotations as Flow;

/**
 * ColorEditor Helper
 *
 * @Flow\Proxy(false)
 */

class ColorEditor implements ProtectedContextAwareInterface
{
    /**
     * Wrap the incoming string in curly brackets
     *
     * @param $text string
     * @return string
     */

    public function wrapInDollar($text) {
        return '$$$ ' . $text . ' $$$';
    }

    /**
     * All methods are considered safe
     *
     * @param string $methodName
     * @return boolean
     */
    public function allowsCallOfMethod($methodName)
    {
        return true;
    }
}

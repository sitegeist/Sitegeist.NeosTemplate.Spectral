<?php
namespace Sitegeist\NeosTemplate\Spectral\Eel\Helper;

use Neos\Eel\ProtectedContextAwareInterface;
use Neos\Flow\Annotations as Flow;

/**
 * ColorEditor Helper
 *
 * @Flow\Proxy(false)
 */

class ColorEditorHelper implements ProtectedContextAwareInterface
{

    /**
     * lighten the hsla number by extracting the lightness part and increasing it
     *
     * @param $hslaColor string
     * @param $percentage integer
     * @return string
     */

    public function lightenHsla($hslaColor, $percentage) {
        $hslaParts = explode(',', $hslaColor);
        $lightness = floatval(rtrim($hslaParts[2],'%'));
        $lightness =round( $lightness *  ($percentage/100 + 1));
        $hslaParts[2] = $lightness . '%';
        return join(",",$hslaParts);
    }

    /**
     * make the hsla number more transparent by extracting the alpha part and increasing it
     *
     * @param $hslaColor string
     * @param $percentage integer
     * @return string
     */

    public function makeHslaTransparent($hslaColor, $percentage) {
        $hslaParts = explode(',', $hslaColor);
        $alpha = floatval($hslaParts[3]);
        $alpha =round( $alpha *  ($percentage/100 + 1));
        $hslaParts[3] = $alpha.')';
        return join(",",$hslaParts);
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

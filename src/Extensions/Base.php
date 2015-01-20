<?php namespace Foil\Extensions;

use Foil\Contracts\ExtensionInterface;
use Foil\Contracts\APIAwareInterface as APIAware;
use Foil\Traits\APIAwareTrait;

/**
 * Base API-aware class for extensions
 *
 * @author Giuseppe Mazzapica <giuseppe.mazzapica@gmail.com>
 * @package foil\foil
 * @license http://opensource.org/licenses/MIT MIT
 */
abstract class Base implements ExtensionInterface, APIAware
{
    use APIAwareTrait;

    private $args;

    public function setup(array $args = [])
    {
        $this->args = $args;
    }

    public function provideFilters()
    {
        return [];
    }

    public function provideFunctions()
    {
        return [];
    }

    public function option($option = null)
    {
        return $this->api()->option($option);
    }
}

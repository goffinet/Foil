<?php namespace Foil\Contracts;

/**
 * Object that provides context to templates.
 *
 * @author Giuseppe Mazzapica <giuseppe.mazzapica@gmail.com>
 * @package foil\foil
 * @license http://opensource.org/licenses/MIT MIT
 */
interface ContextInterface
{
    /**
     * Receives a template name and return true if data have to be provided for it
     *
     * @param  string  $template
     * @return boolean
     */
    public function accept($template);

    /**
     * Provide data to template
     *
     * return array
     */
    public function provide();
}

<?php
/**
 * @package dompdf
 * @link    http://dompdf.github.com/
 * @author  Benj Carson <benjcarson@digitaljunkies.ca>
 * @license http://www.gnu.org/copyleft/lesser GNU Lesser General Public License
 */

namespace Dompdf;

/**
 * Standard exception thrown by DOMPDF classes
 *
 * @package dompdf
 */
class Exception extends \Exception
{

    /**
     * Class constructor
     *
     * @param string $message Error message
     * @param int $code       Error code
     */
    public function __construct($message = null, $code = 0)
    {
        parent::__construct($message, $code);
    }
}

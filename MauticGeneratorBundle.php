<?php
/**
 * @package     Mautic
 * @copyright   2015 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\Bundle\MauticGeneratorBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * MauticGeneratorBundle
 */
class MauticGeneratorBundle extends Bundle
{
    /**
     * {@inheritdoc}
     *
     * @return string The Bundle parent name it overrides or null if no parent
     */
    public function getParent()
    {
        return 'SensioGeneratorBundle';
    }
}

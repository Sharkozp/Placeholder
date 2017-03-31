<?php
/**
 * Created by PhpStorm.
 * User: oleksandr
 * Date: 31.03.17
 * Time: 13:41
 */

namespace Placeholder\Containers;

use Plenty\Plugin\Templates\Twig;

class PlaceholderContainer
{
    public function call(Twig $twig): string
    {
        return $twig->render('Placeholder::content.Placeholder');
    }
}
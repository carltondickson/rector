<?php

namespace RectorPrefix20210820\TYPO3\CMS\Core\Resource\Exception;

use Exception;
if (\class_exists('TYPO3\\CMS\\Core\\Resource\\Exception\\InvalidPathException')) {
    return;
}
class InvalidPathException extends \Exception
{
}

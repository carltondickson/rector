<?php

declare (strict_types=1);
namespace RectorPrefix20220111\Doctrine\Inflector\Rules\Portuguese;

use RectorPrefix20220111\Doctrine\Inflector\GenericLanguageInflectorFactory;
use RectorPrefix20220111\Doctrine\Inflector\Rules\Ruleset;
final class InflectorFactory extends \RectorPrefix20220111\Doctrine\Inflector\GenericLanguageInflectorFactory
{
    protected function getSingularRuleset() : \RectorPrefix20220111\Doctrine\Inflector\Rules\Ruleset
    {
        return \RectorPrefix20220111\Doctrine\Inflector\Rules\Portuguese\Rules::getSingularRuleset();
    }
    protected function getPluralRuleset() : \RectorPrefix20220111\Doctrine\Inflector\Rules\Ruleset
    {
        return \RectorPrefix20220111\Doctrine\Inflector\Rules\Portuguese\Rules::getPluralRuleset();
    }
}

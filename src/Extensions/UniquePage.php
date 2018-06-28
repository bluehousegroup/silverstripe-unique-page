<?php

namespace BluehouseGroup\UniquePage\Extensions;

use SilverStripe\Core\Extension;

class UniquePage extends Extension
{
    public function canCreate($member = null, $context = array())
    {
        $class_name = $this->owner->ClassName;
        return $class_name::get()->count() === 0;
    }
}

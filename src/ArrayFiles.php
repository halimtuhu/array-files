<?php

namespace Halimtuhu\ArrayFiles;

use Laravel\Nova\Fields\Field;

class ArrayFiles extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'array-files';

    /**
     * Indicates if the element should be shown on the index view.
     *
     * @var bool
     */
    public $showOnIndex = false;

    /**
     * @param @disk
     * @return ArrayFiles
     */
    public function disk($disk)
    {
        return $this->withMeta(['disk' => $disk]);
    }

    /**
     * @param $path
     * @return ArrayFiles
     */
    public function path($path)
    {
        return $this->withMeta(['path' => $path]);
    }

}

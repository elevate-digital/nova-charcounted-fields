<?php

namespace ElevateDigital\CharcountedFields;

class TextareaCounted extends FieldCounted
{

    /**
     * The field's component.
     * @var string
     */
    public $component = 'textarea-counted';
    
    /**
     * The number of rows used for the textarea.
     *
     * @var int
     */
    public $rows = 5;

    /**
     * Set the number of rows used for the textarea.
     *
     * @param  int $rows
     * @return $this
     */
    public function rows($rows)
    {
        $this->rows = $rows;

        return $this;
    }

    /**
     * Prepare the element for JSON serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), [
            'rows' => $this->rows,
			'helpText' => $this->getHelpText(),
        ]);
    }
}

<?php

namespace ElevateDigital\CharcountedFields;

class TextCounted extends FieldCounted
{

    /**
     * The field's component.
     * @var string
     */
    public $component = 'text-counted';

	/**
	 * Prepare the element for JSON serialization.
	 *
	 * @return array
	 */
	public function jsonSerialize()
	{
		return array_merge(parent::jsonSerialize(), [
			'helpText' => $this->getHelpText(),
		]);
	}
}

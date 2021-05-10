<?php

namespace ElevateDigital\CharcountedFields;

use Laravel\Nova\Fields\Field;

class FieldCounted extends Field
{
	private $pattern;
	private $max;

	public function maxChars (int $characters)
	{
		$this->max = $characters;
		return $this->withMeta([
			'maxChars' => $characters, 'extraAttributes' => [
				'maxlength' => $this->max,
				'pattern' => $this->pattern
			]
		]);
	}

	public function pattern (string $pattern)
	{
		$this->pattern = $pattern;
		return $this->withMeta([
			'extraAttributes' => [
				'maxlength' => $this->max,
				'pattern' => $this->pattern
			]
		]);
	}

	public function warningAt (int $characters)
	{
		return $this->withMeta([ 'warningAt' => $characters ]);
	}
}

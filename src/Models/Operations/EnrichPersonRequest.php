<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace structure\Structure\Models\Operations;

use \structure\Structure\Utils\SpeakeasyMetadata;
class EnrichPersonRequest
{
    /**
     * LinkedIn ID of the person
     * 
     * @var ?string $id
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=id')]
    public ?string $id = null;
    
	public function __construct()
	{
		$this->id = null;
	}
}

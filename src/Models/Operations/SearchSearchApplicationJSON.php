<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace structure\Structure\Models\Operations;


class SearchSearchApplicationJSON
{
    /**
     * Filter for searching
     * 
     * @var ?string $filter
     */
	#[\JMS\Serializer\Annotation\SerializedName('filter')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $filter = null;
    
    /**
     * Number of results per page (0-100)
     * 
     * @var ?string $limit
     */
	#[\JMS\Serializer\Annotation\SerializedName('limit')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $limit = null;
    
    /**
     * The offset number to start at
     * 
     * @var ?string $page
     */
	#[\JMS\Serializer\Annotation\SerializedName('page')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $page = null;
    
    /**
     * Query for searching
     * 
     * @var ?string $query
     */
	#[\JMS\Serializer\Annotation\SerializedName('query')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $query = null;
    
	public function __construct()
	{
		$this->filter = null;
		$this->limit = null;
		$this->page = null;
		$this->query = null;
	}
}

<?php

namespace App\JsonApi\Countries;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'countries';

    /**
     * @param \App\Country $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param \App\Country $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
            'country' => $resource->country,
            'iso2' => $resource->iso2,
            'iso3' => $resource->iso3,
            'slug' => $resource->slug

        ];
    }

    public function getRelationships($resource, $isPrimary, array $includeRelationships)
    {
    return [
        'cities' => [
            self::SHOW_SELF => true,
            self::SHOW_RELATED => true,
        ],
        'admins' => [
            self::SHOW_SELF => true,
            self::SHOW_RELATED => true,
        ]
    ];
    }
}

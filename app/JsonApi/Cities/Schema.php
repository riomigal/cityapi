<?php

namespace App\JsonApi\Cities;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'cities';

    /**
     * @param \App\City $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param \App\City $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
            'city' => $resource->city,
            'city_ascii' => $resource->city_ascii,
            'city_alt' => $resource->city_alt,
            'latitude' => $resource->latitude,
            'longitude' => $resource->longitude,
            'density' => $resource->density,
            'population' => $resource->population,
            'population_proper' => $resource->population_proper,
            'ranking' => $resource->ranking,
            'timezone' => $resource->timezone,
            'same_name' => $resource->same_name,
            'capital' => $resource->capital,
            'slug' => $resource->slug,

        ];
    }

    public function getRelationships($resource, $isPrimary, array $includeRelationships)
    {
    return [
        'admin' => [
            self::SHOW_SELF => true,
            self::SHOW_RELATED => true,
        ],
        'country' => [
            self::SHOW_SELF => true,
            self::SHOW_RELATED => true,
        ]
    ];
}
}

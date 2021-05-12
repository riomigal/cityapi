<?php

namespace App\JsonApi\Admins;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'admins';

    /**
     * @param \App\Admin $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param \App\Admin $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
            'admin_name' => $resource->admin_name,
            'admin_name_ascii' => $resource->admin_name_ascii,
            'admin_code' => $resource->admin_code,
            'admin_type' => $resource->admin_type,
            'slug' => $resource->slug,
        ];
    }

    public function getRelationships($resource, $isPrimary, array $includeRelationships)
{
    return [
        'country' => [
            self::SHOW_SELF => true,
            self::SHOW_RELATED => true,
        ],
        'cities' => [
            self::SHOW_SELF => true,
            self::SHOW_RELATED => true,
        ]
    ];
}
}

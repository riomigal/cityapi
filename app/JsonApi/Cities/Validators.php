<?php

namespace App\JsonApi\Cities;

use CloudCreativity\LaravelJsonApi\Validation\AbstractValidators;

class Validators extends AbstractValidators
{


    protected $allowedPagingParameters = ['page', 'limit'];

    protected $queryRules = [
        'page.page' => 'filled|numeric|min:1',
        'page.limit' => 'filled|numeric|between:1,99',

    ];


    /**
     * The include paths a client is allowed to request.
     *
     * @var string[]|null
     *      the allowed paths, an empty array for none allowed, or null to allow all paths.
     */
    protected $allowedIncludePaths = [];

    /**
     * The sort field names a client is allowed send.
     *
     * @var string[]|null
     *      the allowed fields, an empty array for none allowed, or null to allow all fields.
     */
    protected $allowedSortParameters = [];

    /**
     * The filters a client is allowed send.
     *
     * @var string[]|null
     *      the allowed filters, an empty array for none allowed, or null to allow all.
     */
    protected $allowedFilteringParameters = ['id', 'search', 'latitude', 'longitude', 'radius', 'admin-id', 'country-id'];

    /**
     * Get resource validation rules.
     *
     * @param mixed|null $record
     *      the record being updated, or null if creating a resource.
     * @param array $data
     *      the data being validated
     * @return array
     */
    protected function rules($record, array $data): array
    {
        return [];
    }

    /**
     * Get query parameter validation rules.
     *
     * @return array
     */
    protected function queryRules(): array
    {
        return array_merge([
            'filter.id' => 'filled',
            'filter.search' => 'filled|string|min:1',
            'filter.latitude' => 'filled|regex:/^\d*(\.\d{2})?$/|min:1',
            'filter.longitude' => 'filled|regex:/^\d*(\.\d{2})?$/|min:1',
            'filter.radius' => 'filled|integer|min:1',
            'filter.admin-id' => 'filled',
            'filter.country-id' => 'filled'
        ], $this->queryRules);
    }
}

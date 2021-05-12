<?php

namespace App\JsonApi\Countries;

use CloudCreativity\LaravelJsonApi\Validation\AbstractValidators;

class Validators extends AbstractValidators
{


    protected $allowedPagingParameters = ['page', 'limit'];

    protected $queryRules = [
        'page.page' => 'filled|numeric|min:1',
        'page.limit' => 'filled|numeric|between:1,100',
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
    protected $allowedFilteringParameters = ['search', 'id'];

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
        return [
            //
        ];
    }

    /**
     * Get query parameter validation rules.
     *
     * @return array
     */
    protected function queryRules(): array
    {
        return array_merge([
            'filter.search' => 'filled|string|min:1',
            'filter.id' => 'filled'
        ], $this->queryRules);
    }
}

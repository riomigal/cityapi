<?php

namespace App\JsonApi\Countries;

use App\Models\Country;
use CloudCreativity\LaravelJsonApi\Eloquent\AbstractAdapter;
use CloudCreativity\LaravelJsonApi\Pagination\StandardStrategy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class Adapter extends AbstractAdapter
{

    /**
     * Mapping of JSON API attribute field names to model keys.
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * Mapping of JSON API filter names to model scopes.
     *
     * @var array
     */
    protected $filterScopes = [];

    /**
     * Adapter constructor.
     *
     * @param StandardStrategy $paging
     */
    public function __construct(StandardStrategy $paging)
    {
        $paging->withPageKey('page')->withPerPageKey('limit');
        parent::__construct(new Country(), $paging);
    }

    /**
     * @param Builder $query
     * @param Collection $filters
     * @return void
     */
    protected function filter($query, Collection $filters)
    {
        if ($search = $filters->get('search')) {
            $query->where('country', 'like', "{$search}%");
        }

        // Filter by Id
        if ($id = $filters->get('id')) {
            $query->whereIn('id', explode(',', $id));
        }
        //$this->filterWithScopes($query, $filters);
    }

    protected function cities()
    {
        return $this->hasMany();
    }


    protected function admins()
    {
        return $this->hasMany();
    }
}

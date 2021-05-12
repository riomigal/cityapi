<?php

namespace App\JsonApi\Cities;


use App\Models\City;
use CloudCreativity\LaravelJsonApi\Eloquent\AbstractAdapter;
use CloudCreativity\LaravelJsonApi\Pagination\StandardStrategy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class Adapter extends AbstractAdapter
{


    /**
     * Force Pagination
     */
    protected $defaultPagination = ['number' => 1];

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
        parent::__construct(new City(), $paging);
    }

    /**
     * @param Builder $query
     * @param Collection $filters
     * @return void
     */
    protected function filter($query, Collection $filters)
    {
        // Return cities by radius
        $latitude = $filters->get('latitude');
        $longitude = $filters->get('longitude');
        $radius = $filters->get('radius');


        if ($latitude && $longitude && $radius) {
            $query->radius($latitude, $longitude, $radius);
        }
        // Filter Cities by name
        else {

            // Filter by Id
            if ($id = $filters->get('id')) {
                $query->whereIn('id', explode(',', $id));
            }

            if ($search = $filters->get('search')) {

                $query->where('city', 'like', "{$search}%")
                    ->orWhere('city_ascii', 'like', "{$search}");
            }

            // Filter by Admin
            if ($admin_id = $filters->get('admin-id')) {
                $query->whereIn('admin_id', explode(',', $admin_id));
            }

            // Filter by Country
            if ($country_id = $filters->get('country-id')) {
                $query->whereIn('country_id', explode(',', $country_id));
            }
        }


        // $this->filterWithScopes($query, $filters);
    }


    protected function country()
    {
        return $this->hasOne();
    }


    protected function admin()
    {
        return $this->hasOne();
    }
}

The api implements the simplemaps.com database. The database is normalized in third normal form (cities, admins, countries).


<b>Countries:</b>

GET Params: filter[search], filter[id]

All countries
http://cityapi.migale.eu/api/v1/countries

Search country
http://cityapi.migale.eu/api/v1/countries?filter[search]={input}

Show by id
http://cityapi.migale.eu/api/v1/countries/{id}

Show by ids
http://cityapi.migale.eu/api/v1/countries?filter[id]={ids} (comma separated 132,12...)

Relationships:
Admins: http://cityapi.migale.eu/api/v1/countries/{id}/relationships/admins
Cities: http://cityapi.migale.eu/api/v1/countries/{id}/relationships/cities


<b>Admins:</b>

GET Params: filter[search], filter[id], filter[country-id] 

All countries
http://cityapi.migale.eu/api/v1/admins

Search admin
http://cityapi.migale.eu/api/v1/admins?filter[search]={input}

Show by id
http://cityapi.migale.eu/api/v1/admins/{id}

Show by ids
http://cityapi.migale.eu/api/v1/admins?filter[id]={ids} (comma separated 132,12...)

Filter by country ids
http://cityapi.migale.eu/api/v1/admins?filter[country-id]={ids} (comma separated 132,12...)

Relationsships:
Cities: http://cityapi.migale.eu/api/v1/admins/{id}/relationships/cities
Country: http://cityapi.migale.eu/api/v1/admins/{id}/relationships/country



<b>Cities:</b>

GET Params: filter[search], filter[id], filter[country-id], filter['admin-id]

All countries
http://cityapi.migale.eu/api/v1/cities

Search admin
http://cityapi.migale.eu/api/v1/cities?filter[search]={input}

Show by id
http://cityapi.migale.eu/api/v1/cities/{id}

Show by ids
http://cityapi.migale.eu/api/v1/cities?filter[id]={ids} (comma separated 132,12...)

Filter by country ids
http://cityapi.migale.eu/api/v1/cities?filter[country-id]={ids} (comma separated 132,12...)

Filter by admin ids
http://cityapi.migale.eu/api/v1/cities?filter[admin-id]={ids} (comma separated 132,12...)

Relationsships:
Admin: http://cityapi.migale.eu/api/v1/cities/{id}/relationships/admin
Country: http://cityapi.migale.eu/api/v1/cities/{id}/relationships/country


<p>City Radius Search</p>

GET Params: filter[latitude], fitler[longitude], filter[radius]

Fitler radius:

http://cityapi.migale.eu/api/v1/cities?filter[latitude]={latitude}&filter[longitude]={longitude}&filter[radius]={radius}

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# worldcitiesAPI


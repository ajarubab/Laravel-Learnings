<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
-----------------------------------------------------------------------------------------

commands in sequence :

1. ➜ laravel new laravel-learnings
    
    Which starter kit would you like to install? : None
    
    Which database will your application use? : MySQL
    
    Default database updated. Would you like to run the default database migrations?  : Yes 
    
    The database 'laravel_learnings' does not exist on the 'mysql' connection.  
    Would you like to create it?  : Yes

    Would you like to run npm install and npm run build? : Yes

2. ➜ cd laravel-learnings
3. ➜ composer run dev

Server running on [http://127.0.0.1:8000].  

-----------------------------------------------------------------------------------------
To create a view using artisan command

4. ➜ php artisan make:view firstCustomView

-----------------------------------------------------------------------------------------
To create a controller using artisan command

5. ➜ php artisan make:controller FirstCustomViewController

-----------------------------------------------------------------------------------------
To create a component using artisan command

6. ➜ php artisan make:component Notifications
-----------------------------------------------------------------------------------------
To publish validation.php file using artisan command

7. ➜ php artisan lang:publish
-----------------------------------------------------------------------------------------
To access the files of path "storage/app/public/uploads/" we create a symboilic link by the artisan command :

8. ➜ php artisan storage:link

with 

➜ chmod -R 775 storage
➜ chmod -R 775 bootstrap/cache

results : 
for $file->storeAs('public/uploads', 'abc.pdf');
the link "http://localhost/storage/uploads/abc.pdf" is accesible now.
-----------------------------------------------------------------------------------------
To create a custom validation rule using artisan command

9. ➜ php artisan make:rule OnlyDotInDomain

It creates a Folder named Rules in app folder and within it the custum rule files are situated.
-----------------------------------------------------------------------------------------
To create a middleware using artisan command

10. ➜ php artisan make:middleware AgeCheck

It creates a Folder named Middleware in app/Http and within it the newly created AgeCheck.php is situated.

To apply the newly created middleware we need to register it within bootstrap/app.php's withMiddleware block after importing our middleware.

Hit url like "http://localhost:8000/abt/Ram/?age=21&country=ind&gender=male&dis=na" to check effect of grouped middleware implementation if implemented on any route.
-----------------------------------------------------------------------------------------
11. To connect the mysql database with laravel 

         * 1. Go to phpMyAdmin and create a database ( here i created 'laravelLearningDb' named database)
         * 2. Come to .env file and make changes as below
         
                DB_CONNECTION=mysql
                DB_HOST=127.0.0.1
                DB_PORT=3306
                DB_DATABASE=laravelLearningDb
                DB_USERNAME=root
                DB_PASSWORD=

         * 3. Now if we run any previously working and existing route, it will show some session error like

"SQLSTATE[42S02]: Base table or view not found: 1146 Table 'laravellearningdb.sessions' doesn't exist (Connection: mysql, SQL: select * from `sessions` where `id` = O5FeYtuKL0tnSnibVLzqiweXOBwfKk6paRKbAEBu limit 1)"

         * 4. Go to terminal and run ' php artisan migrate '
         * 5. Now refresh the page which was showing session error, it will work fine now.
         * 6. There will be 9 default tables in our laravellearningdb having users table at last.
         * 7. In the default EMPTY users table there will be 8 columns having id, name,email,email_verified_at,password,remember_token,created_at and updated_at column.
         * 8. Create a controller and a route and in controller function using Fasades\DB class run "select * from users" on output we will get [].
         * 9. Now from phpMyAdmin page click on laravelLearningDb -> users -> insert
         * 10. Enter the name , email and password and click on go. it will insert a data in users table.
         * 11. Now again refresh the controllers function's Route, we will get that single inserted data having name, email and password just like below when checked Preety print.
         
         [
            {
                "id": 1,
                "name": "Raja",
                "email": "jai@siya.ram",
                "email_verified_at": null,
                "password": "12345",
                "remember_token": null,
                "created_at": null,
                "updated_at": null
            }
        ]

---------------------------------------------------------------------------------------------------

 To Create own cutom table in our databse and then inserting some data there and fetch those data without using "php artisan migrate" command follow the steps below: 

    a. Delete the current database "laravelLearnigDb" and make new database Again with same name.
    b. Make your own custom table by any name ( here i have named the table 'users' with 4 column Id, Name, Email and Phone.)
    c. Enter some of data in the table like 2 or 3 person data.
    d. Now if we run our previous route of users it will show error like :

    "Illuminate\Database\QueryException
SQLSTATE[42S02]: Base table or view not found: 1146 Table 'laravellearningdb.sessions' doesn't exist (Connection: mysql, SQL: select * from `sessions` where `id` = qTPfOCZvInPoOgPq4ZZLCJP6mPtvS4UwMJg0EYfQ limit 1)"

    e. Goto .env file, change the SESSION_DRIVER=database to SESSION_DRIVER=file and the error will get vanished on reload.

    we wiil have our output as :

    [
        {
            "Id": 1,
            "Name": "Raja",
            "Email": "jai@shree.ram",
            "Phone": "9090909090"
        },
        {
            "Id": 2,
            "Name": "Rajat",
            "Email": "jai@shree.krishna",
            "Phone": "9090909080"
        }
    ]

-----------------------------------------------------------------------------------------
To create a model using artisan command

11. ➜ php artisan make:model Student

It is adviced that the model name should be in singular form of pre-existing Table of our database.(i.e. if modal name is 'Student' then the tablename should be 'students' and vice-versa for automatica database_table-model connectivity in laravel.).

It creates a folder App\Models wherein our Student.php model exists.

-----------------------------------------------------------------------------------------

If somehow the table name in database gets changed (let it be it_students) i the database and if we try to fetch our data we will get an error as :

"SQLSTATE[42S02]: Base table or view not found: 1146 Table 'laravellearningdb.students' doesn't exist (Connection: mysql, SQL: select * from `students`)"

To overcome it just Goto your model file(here it is Student.php) and insert a line of

protected $table = 'Changed database_tablename'; (i.e. protected $table = 'it_students'; in my case)

and then reload the page, we will get out output without any error.

-----------------------------------------------------------------------------------------
To get the Details of any model of our laravel project and its connected database-table details in the terminal

12. ➜ php artisan model:show ModelName 
( here i have modelname as Student so 'php artisan model:show Student')

-----------------------------------------------------------------------------------------
To create model and controller of the same name using a single artisan command

13. ➜ php artisan make:model Employee -c 

-----------------------------------------------------------------------------------------
To create model with migration and controller of the same name using a single artisan command

14. ➜ php artisan make:model Customer -mc

-----------------------------------------------------------------------------------------
To recreate all tables of our databse in mysql database using a single artisan command

15. ➜ php artisan migrate

-----------------------------------------------------------------------------------------
To create a single new table in our mysql databse using a single artisan command

16. ➜ php artisan migrate  --path=relative_path_of_table
e.g php artisan migrate --path=database/migrations/2025_06_14_143511_create_customers_table.php
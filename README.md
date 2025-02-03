# LaraGigs

An app for listing Laravel gigs/jobs. This project is from my YouTube ["Laravel From Scratch 2022"](https://www.youtube.com/watch?v=MYyJ4PuL4pY) course.

![LaraGigs Screenshot](screen.png "LaraGigs")

## Features
- List Laravel jobs and projects
- Search for gigs
- User authentication
- File uploading
- Good pagination for easy navigation

## Usage

### Database Setup
This app uses MySQL. To use something different, open up `config/database.php` and change the default driver.

To use MySQL, install it, set up a database, and then add your database credentials (database, username, and password) to the `.env.example` file and rename it to `.env`.

### Migrations
To create all the necessary tables and columns, run:
```
php artisan migrate
```

### Seeding The Database
The seeder file is programmed to add fake listings against `user_id = 1`.  
To add dummy listings with a single user, run:
```
php artisan db:seed --class=UserListingSeeder
```

### File Uploading
When uploading listing files, they go to `"storage/app/public"`. Create a symlink with the following command to make them publicly accessible:
```
php artisan storage:link
```

### Running The App
Upload the files to your document root, Valet folder, or run:
```
php artisan serve
```

## License

The LaraGigs app is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Hashtags

#Laravel #PHP #WebDevelopment #JobPortal #LaravelJobs #BackendDevelopment #DevCommunity #WebDev #OpenSource #Programming

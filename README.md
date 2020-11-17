## Development with XAMPP

First install [xampp](https://www.apachefriends.org), [composer](https://getcomposer.org) and [nodejs](https://nodejs.org).

In the xampp panel, start apache and php and open phpmyadmin. There, create a new table named "laravel".

Copy `.env.example` to `.env`. In `.env`, set the database hostname to localhost and set the username and password fields:

```
DB_HOST=localhost
DB_USERNAME=root
DB_PASSWORD=
```

These variables might be different depending on your Xampp Installation.

The other variables can be kept the same. Open a terminal and execute the following commands (in the hr folder):

```bash
composer install
npm install
npm run dev
php artisan key:generate
php artisan migrate:fresh --seed
```

Finally, configure the XAMPP Apache server to point to `path_to_hr/public`, by changing the `httpd.conf` file (xampp panel -> apache -> config -> httpd.conf) (usually you have to change two lines with `DocumentRoot ...` and `<Directory ...>`).

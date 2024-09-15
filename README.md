# user-account
Laravel CRUD for User Account

1. Download user-account
2. Copy folder to Laravel projects folder
3. Copy user-account\.env.example to user-account\.env
4. Update .env MAIL_X values to preferred SMTP settings
5. CLI: cd user-account
6. composer install
7. php artisan key:generate
8. mysql -u root -p -e "CREATE DATABASE user_account"
9. php artisan migrate:fresh --seed
10. npm install
11. php artisan serve

http://localhost:8000
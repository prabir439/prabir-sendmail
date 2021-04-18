1. composer update
2. configure .env File :


exmple : 
MAIL_MAILER=smtp 
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=465
MAIL_USERNAME= your gmail account name
MAIL_PASSWORD= email password
MAIL_ENCRYPTION=ssl

3. php artisan config:cache
4. php artisan migrate
5. php artisan serve
6. browse: /contact

cd /home/oem/
docker compose up -d
cd laravel/estudios
php artisan  serve &
php artisan  migrate:fresh --seed
npm run dev

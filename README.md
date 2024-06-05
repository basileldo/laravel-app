**SETUP GUIDE**

Step 1: Set Up Local Environment
**Install Docker**: Ensure Docker is installed on your Windows system. You can download it from Docker's official site.

**Install Lando**: Install Lando by downloading the installer from Lando's official site.

**Step 2:** Initialize Laravel Project with Lando
Create a new Laravel project:

sh

composer create-project --prefer-dist laravel/laravel laravel-app
cd laravel-app
Initialize Lando in the project:

sh

lando init --source cwd --recipe laravel --webroot public --name laravel-app
lando start
Access the app:

sh

lando ssh
Install Laravel Breeze:

sh

composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
php artisan migrate
Install TailwindCSS:

sh

npm install -D tailwindcss
npx tailwindcss init

**Configure TailwindCSS:** Update tailwind.config.js to include Laravel blade files.

**Update CSS:** Update resources/css/app.css to include Tailwind directives.

sh

php artisan make:model Category -mcr
php artisan make:model Product -mcr
Define migrations:

database/migrations/create_categories_table.php:

php
Copy code
Schema::create('categories', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->timestamps();
});
database/migrations/create_products_table.php:

php
Copy code
Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('sku')->unique();
    $table->string('title');
    $table->text('description');
    $table->decimal('price', 8, 2);
    $table->foreignId('category_id')->constrained()->onDelete('cascade');
    $table->string('image')->nullable();
    $table->timestamps();
});

**Run migrations:**

sh

php artisan migrate
Set up relationships in models:

Add neccessary controllers and functionality


Step 7: Testing and Deployment
Start Lando and run the application:

sh

lando start
lando ssh
php artisan serve

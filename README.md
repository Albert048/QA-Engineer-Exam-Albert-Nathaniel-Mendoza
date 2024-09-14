## Installations

1. Open Terminal (Ubuntu OS/MacOS).

2. Install Node 18.x
   
   ```bash
        $   sudo apt update
        $   sudo apt install nodejs
        $   sudo apt install npm
    ```
   
3. Install PHP 8.2
   
    ```bash
        $   sudo add-apt-repository ppa:ondrej/php
        $   sudo apt update
        $   sudo apt install php8.2
    ```
4. Install mysql
   
   ```bash
        $   sudo apt install mysql-server    
    ```
5. Install composer
   
   ```bash
        $   sudo apt install php-cli unzip
        $   cd ~
        $   curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
        $   HASH=`curl -sS https://composer.github.io/installer.sig`
        $   sudo php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer
    ```
6. Install git
    
   ```bash
        $   sudo apt install git     
    ```

7. Install PHPUnit
    
   ```bash
        $   sudo apt install php-cli \
                 php-json \
                 php-mbstring \
                 php-xml \
                 php-pcov \
                 php-xdebug        
    ```
## Configuration

1.  Clone this repository.

    ```bash
        $   git clone https://github.com/ericnicdao069/backend-dev-exam.git
    ```

2.  Recreate environment variable file.

    ```bash
        $   cp .env.example .env
    ```

3.  Install composer and npm.

    ```bash
        $   composer install && npm install
    ```

4.  Generate Application Key.

    ```bash
        $   php artisan key:generate
    ```

5.  Create your DB and update your DB configs in .env.

    ```bash
        $   DB_CONNECTION=mysql
        $   DB_HOST=127.0.0.1
        $   DB_PORT=3306
        $   DB_DATABASE=laravel
        $   DB_USERNAME=root
        $   DB_PASSWORD=
    ```

6.  Execute Database Migration and Seeders.

    ```bash
        $   php artisan migrate --seed
    ```

7.  Create a symlink for Storage in Public Directory.

    ```bash
        $   php artisan storage:link
    ```

8.  Generate Ziggy routes.

    ```bash
        $   php artisan ziggy:generate
    ```

9.  Run local server.

    ```bash
        $   php artisan serve
    ```

10.  Front Build.

    ```bash
        $   npm run dev
        $   npm run build
    ```

## After configuration, Install these on backend-dev-exam

1.  Install lravel dusk.

    ```bash
        $   composer require --dev laravel/dusk
        $   php artisan dusk:install
    ```
2.  Install Playwright.

    ```bash
        $   npm init playwright@latest
    ```
    
## How to run tests

1. Laravel Dusk Testing

   ```bash
        $   php artisan dusk file/path
    ```
   
2. Playwright Testing

   ```bash
        $   npx playwright test filename
    ```

Hello! these are the key steps I used in Automation Testing. the filepath for laravel dusk testing is in tests/Feature folder while the Playwright Testing is in e2e path. The code and documentation are work in progress but I hope this give you some impression as I am a fresh grad who wants to grow to a rapid and challenging environment.

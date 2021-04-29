Versi laravel 7

composer require livewire/livewire
composer require laravel/ui:^2.4


npm install
npm run dev

php artisan ui bootstrap --auth
npm install && npm run dev

turoblink https://github.com/livewire/turbolinks
  <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>


  table user
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->integer('level');
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    $table->rememberToken();
    $table->timestamps();

table belanja
    $table->id();
    $table->integer('user_id');
    $table->integer('produk_id');
    $table->integer('total_harga');
    $table->integer('status');
    $table->timestamps();

table produk
    $table->id();
    $table->string('nama');
    $table->string('gambar');
    $table->integer('harga');
    $table->integer('berat');
    $table->timestamps();


php artisan make:model Belanja -m

php artisan make:livewire Home

php artisan make:Livewire TambahProduk


php artisan storage:link

38:30

php artisan make:livewire BelanjaUser

PRT 4 9:40
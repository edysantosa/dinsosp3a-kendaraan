
<p align="center"><a href="https://dissosp3a.baliprov.go.id/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/1/10/Coat_of_arms_of_Bali.svg" width="200"></a></p>

## Aplikasi Dashboard Dinsos P3A Prov Bali

Aplikasi ini akan menampung semua modul yang akan dibuat kedepannya oleh Dinas Sosial P3A:

## How To

Aplikasi ini menggunakan Laravel 8, dan memanfaatkan sepenuhnya laravel-mix untuk mengkompilasi javascript dan css dari template bootstrap 4 yang ada.
Untuk memulai ngoding, cek langkah-langkah berikut

### Langkah-langkah Developement

- Install PHP (>= PHP7.3), composer, nodejs (untuk npm)
- Pull repo ini menggunakan git
- Buat file konfigurasi ```.env``` baru copy dari file ```.env.example```
- Jalankan perintah-perintah berikut di command line
  - Generate key baru ```php artisan key:generate```
  - Install dependency php ```composer install``` 
  - Install dependency javasript ```npm install```

#### Apabila masih ada masalah (layar browser kosong), coba jalankan perintah berikut
```
php artisan cache:clear
php artisan clear-compiled
sudo chmod -R 777 storage
sudo chmod -R 777 bootstrap/cache
composer dump-autoload
```

## Compiling Javascript
TBA

## To Do

- [x] Belajar laravel
- [x] Siapkan template html ke blade
- [x] Menu dinamis dari database
- [ ] Otentifikasi
- [ ] Menu permission / assign dan edit permission per item menu


### **Follow Laravel naming conventions**

 Follow [PSR standards](http://www.php-fig.org/psr/psr-2/).
 
 Also, follow naming conventions accepted by Laravel community:

What | How | Good | Bad
------------ | ------------- | ------------- | -------------
Controller | singular | ArticleController | ~~ArticlesController~~
Route | plural | articles/1 | ~~article/1~~
Named route | snake_case with dot notation | users.show_active | ~~users.show-active, show-active-users~~
Model | singular | User | ~~Users~~
hasOne or belongsTo relationship | singular | articleComment | ~~articleComments, article_comment~~
All other relationships | plural | articleComments | ~~articleComment, article_comments~~
Table | plural | article_comments | ~~article_comment, articleComments~~
Pivot table | singular model names in alphabetical order | article_user | ~~user_article, articles_users~~
Table column | snake_case without model name | meta_title | ~~MetaTitle; article_meta_title~~
Model property | snake_case | $model->created_at | ~~$model->createdAt~~
Foreign key | singular model name with _id suffix | article_id | ~~ArticleId, id_article, articles_id~~
Primary key | - | id | ~~custom_id~~
Migration | - | 2017_01_01_000000_create_articles_table | ~~2017_01_01_000000_articles~~
Method | camelCase | getAll | ~~get_all~~
Method in resource controller | [table](https://laravel.com/docs/master/controllers#resource-controllers) | store | ~~saveArticle~~
Method in test class | camelCase | testGuestCannotSeeArticle | ~~test_guest_cannot_see_article~~
Variable | camelCase | $articlesWithAuthor | ~~$articles_with_author~~
Collection | descriptive, plural | $activeUsers = User::active()->get() | ~~$active, $data~~
Object | descriptive, singular | $activeUser = User::active()->first() | ~~$users, $obj~~
Config and language files index | snake_case | articles_enabled | ~~ArticlesEnabled; articles-enabled~~
View | kebab-case | show-filtered.blade.php | ~~showFiltered.blade.php, show_filtered.blade.php~~
Config | snake_case | google_calendar.php | ~~googleCalendar.php, google-calendar.php~~
Contract (interface) | adjective or noun | AuthenticationInterface | ~~Authenticatable, IAuthentication~~
Trait | adjective | Notifiable | ~~NotificationTrait~~
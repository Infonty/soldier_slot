<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
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

## Project folder structure

📦SoldierSlot
 ├─ 📂.git
 │ ├─ 📂hooks
 │ │ ├─ 📜applypatch-msg.sample
 │ │ ├─ 📜commit-msg.sample
 │ │ ├─ 📜fsmonitor-watchman.sample
 │ │ ├─ 📜post-update.sample
 │ │ ├─ 📜pre-applypatch.sample
 │ │ ├─ 📜pre-commit.sample
 │ │ ├─ 📜pre-merge-commit.sample
 │ │ ├─ 📜pre-push.sample
 │ │ ├─ 📜pre-rebase.sample
 │ │ ├─ 📜pre-receive.sample
 │ │ ├─ 📜prepare-commit-msg.sample
 │ │ ├─ 📜push-to-checkout.sample
 │ │ ├─ 📜sendemail-validate.sample
 │ │ └─ 📜update.sample
 │ ├─ 📂info
 │ │ └─ 📜exclude
 │ ├─ 📂objects
 │ │ ├─ 📂info
 │ │ └─ 📂pack
 │ │ │ ├─ 📜pack-2fe6c5e4cf8f130f411a8d9db2c0b582d0e3d30f.idx
 │ │ │ ├─ 📜pack-2fe6c5e4cf8f130f411a8d9db2c0b582d0e3d30f.pack
 │ │ │ └─ 📜pack-2fe6c5e4cf8f130f411a8d9db2c0b582d0e3d30f.rev
 │ ├─ 📂refs
 │ │ ├─ 📂heads
 │ │ │ └─ 📜master
 │ │ ├─ 📂remotes
 │ │ └─ 📂tags
 │ ├─ 📜config
 │ ├─ 📜description
 │ ├─ 📜HEAD
 │ └─ 📜packed-refs
 ├─ 📂app
 │ ├─ 📂Console
 │ │ └─ 📜Kernel.php
 │ ├─ 📂Exceptions
 │ │ └─ 📜Handler.php
 │ ├─ 📂Http
 │ │ ├─ 📂Controllers
 │ │ │ ├─ 📂Auth
 │ │ │ │ ├─ 📜AuthenticatedSessionController.php
 │ │ │ │ ├─ 📜ConfirmablePasswordController.php
 │ │ │ │ ├─ 📜EmailVerificationNotificationController.php
 │ │ │ │ ├─ 📜EmailVerificationPromptController.php
 │ │ │ │ ├─ 📜NewPasswordController.php
 │ │ │ │ ├─ 📜PasswordResetLinkController.php
 │ │ │ │ ├─ 📜RegisteredUserController.php
 │ │ │ │ └─ 📜VerifyEmailController.php
 │ │ │ ├─ 📜BookingsController.php
 │ │ │ ├─ 📜Controller.php
 │ │ │ └─ 📜ProfileController.php
 │ │ ├─ 📂Middleware
 │ │ │ ├─ 📜Authenticate.php
 │ │ │ ├─ 📜EncryptCookies.php
 │ │ │ ├─ 📜PreventRequestsDuringMaintenance.php
 │ │ │ ├─ 📜RedirectIfAuthenticated.php
 │ │ │ ├─ 📜TrimStrings.php
 │ │ │ ├─ 📜TrustHosts.php
 │ │ │ ├─ 📜TrustProxies.php
 │ │ │ └─ 📜VerifyCsrfToken.php
 │ │ ├─ 📂Requests
 │ │ │ └─ 📂Auth
 │ │ │ │ └─ 📜LoginRequest.php
 │ │ └─ 📜Kernel.php
 │ ├─ 📂Models
 │ │ ├─ 📜Bookings.php
 │ │ └─ 📜User.php
 │ ├─ 📂Providers
 │ │ ├─ 📜AppServiceProvider.php
 │ │ ├─ 📜AuthServiceProvider.php
 │ │ ├─ 📜BroadcastServiceProvider.php
 │ │ ├─ 📜EventServiceProvider.php
 │ │ └─ 📜RouteServiceProvider.php
 │ └─ 📂View
 │ │ └─ 📂Components
 │ │ │ ├─ 📜AppLayout.php
 │ │ │ └─ 📜GuestLayout.php
 ├─ 📂bootstrap
 │ ├─ 📂cache
 │ │ └─ 📜.gitignore
 │ └─ 📜app.php
 ├─ 📂config
 │ ├─ 📜app.php
 │ ├─ 📜auth.php
 │ ├─ 📜broadcasting.php
 │ ├─ 📜cache.php
 │ ├─ 📜cors.php
 │ ├─ 📜database.php
 │ ├─ 📜filesystems.php
 │ ├─ 📜hashing.php
 │ ├─ 📜logging.php
 │ ├─ 📜mail.php
 │ ├─ 📜queue.php
 │ ├─ 📜sanctum.php
 │ ├─ 📜services.php
 │ ├─ 📜session.php
 │ └─ 📜view.php
 ├─ 📂database
 │ ├─ 📂factories
 │ │ └─ 📜UserFactory.php
 │ ├─ 📂migrations
 │ │ ├─ 📜2014_10_12_000000_create_users_table.php
 │ │ ├─ 📜2014_10_12_100000_create_password_resets_table.php
 │ │ ├─ 📜2019_08_19_000000_create_failed_jobs_table.php
 │ │ ├─ 📜2019_12_14_000001_create_personal_access_tokens_table.php
 │ │ └─ 📜2023_02_08_080022_create_bookings_table.php
 │ ├─ 📂seeders
 │ │ └─ 📜DatabaseSeeder.php
 │ └─ 📜.gitignore
 ├─ 📂public
 │ ├─ 📂assets
 │ │ ├─ 📂css
 │ │ │ ├─ 📜style.css
 │ │ │ └─ 📜style.css.map
 │ │ ├─ 📂images
 │ │ │ ├─ 📜logo.png
 │ │ │ ├─ 📜qr-code.png
 │ │ │ └─ 📜verified.gif
 │ │ └─ 📂js
 │ │ │ ├─ 📜bootstrap.bundle.js
 │ │ │ ├─ 📜bootstrap.bundle.js.map
 │ │ │ ├─ 📜bootstrap.bundle.min.js
 │ │ │ ├─ 📜bootstrap.bundle.min.js.map
 │ │ │ ├─ 📜bootstrap.esm.js
 │ │ │ ├─ 📜bootstrap.esm.js.map
 │ │ │ ├─ 📜bootstrap.esm.min.js
 │ │ │ ├─ 📜bootstrap.esm.min.js.map
 │ │ │ ├─ 📜bootstrap.js
 │ │ │ ├─ 📜bootstrap.js.map
 │ │ │ ├─ 📜bootstrap.min.js
 │ │ │ └─ 📜bootstrap.min.js.map
 │ ├─ 📂css
 │ │ └─ 📜app.css
 │ ├─ 📂js
 │ │ └─ 📜app.js
 │ ├─ 📜.htaccess
 │ ├─ 📜favicon.ico
 │ ├─ 📜index.php
 │ └─ 📜mix-manifest.json
 ├─ 📜.editorconfig
 ├─ 📜.env.example
 ├─ 📜.gitattributes
 ├─ 📜.gitignore
 ├─ 📜.styleci.yml
 ├─ 📜artisan
 ├─ 📜composer.json
 ├─ 📜composer.lock
 ├─ 📜package-lock.json
 ├─ 📜package.json
 ├─ 📜phpunit.xml
 └─ 📜README.md


## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

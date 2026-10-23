# NAVV Project

A PHP/MySQL web application project with a public-facing site, login flow, administrative page, and API endpoints for registration, contact, and payment-related actions.

## Technology

- PHP
- MySQL with PDO
- HTML/CSS/JavaScript within the PHP pages
- Local development commonly uses XAMPP or another PHP/MySQL stack

## Main files

- `index.php` — main site interface
- `login.php` — login page
- `admin.php` — administrative interface
- `config/database.php` — database connection configuration
- `api/register.php` — registration endpoint
- `api/contact.php` — contact endpoint
- `api/payment.php` — payment-related endpoint

## Local setup

1. Install a PHP/MySQL environment such as XAMPP.
2. Place the project directory under the local web server's document root.
3. Start Apache and MySQL.
4. Create a MySQL database named `naav_maharashtra`, or update `config/database.php` to use your own database name and local credentials.
5. Import or create the database tables required by the PHP code. A database schema/export is not currently included in this repository, so the required table definitions must be recovered from the project or prepared before the full application can run.
6. Open the project through the local server, for example `http://localhost/navv-project/`.

Do not expose the local development database publicly. The default configuration uses the local `root` account with an empty password, which is common in local XAMPP setups but unsuitable for production.

## Before deployment

This repository needs a security and reliability review before it is used with real users:

- Use prepared statements for all database operations.
- Hash passwords with PHP's password APIs and verify login/session protections.
- Add authorization checks to every administrative and payment-related endpoint.
- Validate and normalize all user input on the server.
- Add CSRF protection to state-changing requests and rate limiting to public endpoints.
- Do not store raw payment-card information; use a trusted payment provider.
- Move database credentials into environment-based configuration.
- Add a database schema/migration and test instructions.
- Review error handling so database details and stack traces are not shown to visitors.

## Project status

This README documents the structure visible in the repository. It does not claim that the application has been fully tested, that payment processing is production-ready, or that the current database schema is complete.

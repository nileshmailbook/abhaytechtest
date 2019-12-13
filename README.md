## Installation

1. Clone this app from url: https://github.com/nileshmailbook/testemployee.git
2. create .ENV file with your db credential.
3. run following

```bash
composer install
```
4. run migration with seeders

```bash
php artisan migrate --seed
``` 
5. start your app using development server http://localhost:8000/

6. use default creadential for admin and employee

	//admin login

	username :admin@admin.com

	password : password

	//employee login

	username : employee1@gmail.com

	password : employee1
	

## Integration

use of middleware to check user have certain role or permission.

use of server side validation for values.

use of migration modifier.

use of request filter for validation.

use of resouce controllers.

use of eloquent for queries.

use of control statement in blade files.

use of auth facades for authentication.

use of contract while checking user role.

use route middleware for prevent user for unthorised access.

use of default service provider.

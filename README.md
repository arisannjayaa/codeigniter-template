
# Codeigniter 3 Template



## Features

- Service layer
- Authentication and Authorization
- Slice templating like laravel blade
- Login
- Dashboard admin panel


## Installation

Clone this project with git

```bash
  git clone https://github.com/arisannjayaa/codeigniter-template.git
```
Config base_url on file config

```bash
  $config['base_url'] = 'http://your-domain.test';
```
Create database and config file for database

```bash
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'your_database',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```

Run migration on browser

```bash
  http://your-domain.test/migrate
```
## Usage/Examples

Use services

a. Create file services on application/services/

b. Copy this example services
```php
<?php

class YourService extends MY_Service
{
    public function hello_world()
    {
        return "Hello world";
    }
}
```
c. Use service on controller

```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->service('YourService', 'yourService');
    }

    public function index()
    {
		return $this->yourService->hello_world();
    }
}
```

## Authors

- [@binhnlt](https://github.com/binhnlt/) - Layer Services
- [@irfaardy](https://github.com/irfaardy/) - Auth Library
- [@gustmartins](https://github.com/gustmartins/) - Slice Library


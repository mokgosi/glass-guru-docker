## Setup Instructions

The following instructions assumes that you are familiar with the following technologies and you have them installed and setup on you local environment if needed:

- Laravel 8/9
- PHP >= 7.4
- MariaDB 10
- Laravel sail
- Docker 20
- Docker-Compose
- Node & NPM
- Git

### Clone the repo from github 
```
$ git clone https://github.com/mokgosi/glass-guru-docker.git
```

### Setup containers and images
```
$ ./vendor/bin/sail up 
```

### Setup containers and images
```
$ ./vendor/bin/sail up 
```

### Compile assets
```
sail npm run prod
```

### Database migration and seed
```
sail artisan migrate:fresh --seed
```

### Create Passport encryption key-pair
```
sail artisan passport:install
```


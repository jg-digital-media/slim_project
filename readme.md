# Slim Project - Daily Quote App

Last Update `13/05/2026 - 12:44

+ This is a daily quote app built with `Slim` for PHP. One quote will appear per day, chosen at random. A new quote can be displayed at any time on on the home root. 

## Content Menu

[Todos](#todos) | [Notes](#notes) | [Links](#links) |  [Log](#log)

### Todos

#### Tasks `9` Completed `7` 
[Back to top](#content-menu)

+ `TODO: COMPLETED: 06-05-2026` Install Composer
+ `TODO: COMPLETED: 06-05-2026` Install Slim
+ `TODO: COMPLETED: 06-05-2026` Create a new Slim project
+ `TODO: COMPLETED: 07-05-2026` Create a new route
+ `TODO: COMPLETED: 07-05-2026` Render PHP Templates
+ `TODO: COMPLETED: 07-05-2026` Server CSS and main script
+ `TODO: COMPLETED: 13-05-2026` Deploy to Web Server
+ `TODO: ` Get and display current date dynamically with PHP
+ `TODO: ` Improve CSS Styling

#### Notes
[Back to top](#content-menu)

##### Command: Composer Create

```bash
composer create-project slim/slim-skeleton slim-quote-app
```

##### Local Server
http://localhost:8080 


```php

app->get('/', function ($request, $response) {
    $response->getBody()->write("Home Page");
    return $response;
});

```

#### Links
[Back to top](#content-menu)

. . .

#### Log
[Back to top](#content-menu)

+ `v5`

  + Deploy "Daily Quote App" to Web Server on `v5`.
  
+ `v4`

  + Configurable base paths to prepare for deployment to production

+ `v3`

  + Matches up (visually) with `v6` of the Express.js version of the project
  + Added Scripts and Stylesheets to the app
  + Implemented Slim Views and Navigation

+ `v2`

  + Installed Slim to local system via Composer
  + Implemented initial project routes in `app/routes.php`

+ `v1`

  + Added readme

. . .
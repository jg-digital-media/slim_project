# Slim Project - Daily Quote App

Last Update `06/05/2026 - 16:15`

+ This is a daily quote app built with `Slim` for PHP. One quote will appear per day, chosen at random. A new quote can be displayed at any time on on the home root. 

## Content Menu

[Todos](#todos) | [Notes](#notes) | [Links](#links) |  [Log](#log)

### Todos

#### Tasks `8` Completed `3` 

+ `TODO: COMPLETED: 06-04-2026` Install Composer
+ `TODO: COMPLETED: 06-04-2026` Install Slim
+ `TODO: COMPLETED: 06-04-2026` Create a new Slim project
+ `TODO:` Create a new route
+ `TODO:` Render PHP Templates
+ `TODO:` Server CSS and main script
+ `TODO:` Improve CSS Styling
+ `TODO:` Deploy to Web Server

#### Notes

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

. . .

#### Log

+ `v2`
  + Installed Slim to local system via Composer
  + Implemented initial project routes in `app/routes.php`

+ `v1`
  + Added readme

. . .
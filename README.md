# MediServe
---
## Overview

MediServe is a web application designed to provide medical services for users.The Project follows an MVC architecture and uses a custom router for handling HTTP requests.

---

## Features

 - **Dynamic Routing**: Handles HTTP GET, POST, PATCH and DELETE requests.
 - **Input Validation**: Uses a `Validator` class for data integrity.
 - **Error Handling**: Displays validation error messages.
 - **Authentication**: Ensures secure access to protected sections (e.g, city and service management).
 - **Service Management**: Full CRUD functionality for services (Add, Edit, Delete, List).
 - **City Management**: Full CRUD functionality for cities (Add, Edit, Delete, List).

---

## Project Structure

```
controllers/
    index.php
    admins/
        add.php
        index.php
        login.php
        logout.php
    cities/
        add.php
        delete.php
        edit.php
        update.pgp
        index.php
    orders/
        index.php
        delete.php
    services/
        add.php
        delete.php
        edit.php
        update.pgp
        index.php
Core/
    App.php
    Container.php
    Database.php
    functions.php
    router.php
    Validator.php
Public/
    assets/
    index.php
views/
    admins/
      add.view.php
      index.view.php
      login.view.php
    cities/
      add.view.php
      index.view.php
      edit.view.php
     services/
      add.view.php
      index.view.php
      edit.view.php
    index.view.php
    orders.view.php
    partials/
      footer.php
      header.php
routes.php
bootstrap.php
config.php
```
---
## Key Directories and Files

### controllers/
Contains the controllers for handling HTTP requests.

- **admins/**: Controllers for admin-related actions.
- **cities/**: Controllers for city-related actions.
- **services/**: Controllers for service-related actions.

### Core/
Contains core classes and functions used throughout the project.

- **Container.php**: Dependency injection container.
- **Database.php**: Database connection and query handling.
- **functions.php**: Helper functions.
- **router.php**: Custom router for handling HTTP requests.
- **Validator.php**: Input validation class.

### Public/
Publicly accessible files, including assets

- **assets/**: Contains CSS, JavaScript, and font files.
- **index.php**: Entry point for the web application.

### views/
Contains the view files for rendering HTML.

- **admins/**: Views for admin-related pages.
- **cities/**: Views for city-related pages.
- **services/**: Views for service-related pages.
- **partials/**: Partial views used in other views.
- **index.view.php**: View for users to place orders.
- **orders.view.php**: View for orders

### routes.php: Defines the routes for the application.

---

## Routes
The routes for the application are defined in `routes.php`. Here are some of the key routes:

- **`/`**: Home Page.
- **`/admins`**: Admin dashboard.
- **`/add-admin`**: Add a new admin.
- **`/login`**: Admin login.
- **`/logout`**: Admin logout.
- **`/add-city`**: Add a new city.
- **`/cities`**: List of cities.
- **`/edit-city`**: Edit a city.
- **`/add-services`**: Add a new service.
- **`/services`**: List of services.
- **`/edit-service`**: Edit a service.
- **`/orders`**: List of orders.

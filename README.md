# Laravel Base App with Metronic 8.2.0 and Custom Core Features

This is a Laravel base application pre-configured with Metronic Bootstrap 8.2.0, Service-Repository pattern, and custom core components (`BaseModel`, `BaseBuilder`, and `BaseResponse`). It is designed to streamline development by providing a robust and scalable architecture for building modern web applications.

---

## **Features**
- **Laravel 11**: Built with the latest version of Laravel for enhanced performance and security.
- **Metronic 8.2.0**: Integrated Metronic Admin Dashboard for a professional and responsive UI.
- **Service-Repository Pattern**: Modular architecture for cleaner and more maintainable code.
- **Custom Core Components**:
  - **BaseModel**: Simplifies data operations, including advanced query handling and datatable integration.
  - **BaseBuilder**: Custom query builder for extending Laravel's Eloquent capabilities.
  - **BaseResponse**: Standardized response structure for API and application outputs.
- **Prettus Laravel Repositories**: Optionally supports Prettus repository implementation for additional flexibility.

---

## **Installation**

### Prerequisites
Ensure you have the following installed on your machine:
- PHP 8.2
- Composer
- Node.js & npm
- MySQL or other supported database

### Steps
1. **Clone the Repository**
   ```bash
   git clone https://github.com/bintangsholu21/laravel-metronic.git
   cd laravel-metronic
   ```

2. **Install Dependencies**
    ```bash
    composer install
    ```
    or
    ```bash
    composer update
    ```

3. **Environment Configuration**
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update database credentials and other environment variables in the `.env` file.

4. **Run Migrations**
   ```bash
   php artisan migrate
   ```

5. **Serve the Application**
   ```bash
   php artisan serve
   ```

---

## **Project Structure**
### **Core Components**
1. **BaseModel**
   - Located in `app/Core/BaseModel.php`
   - Extends Laravel's Eloquent Model with advanced query handling, datatable integration, and view switching.
2. **BaseBuilder**
   - Located in `app/Core/BaseBuilder.php`
   - Custom query builder extending Eloquent capabilities.
3. **BaseResponse**
   - Located in `app/Core/BaseResponse.php`
   - Standardized API responses with structured data and error handling.

### **Service-Repository Pattern**
- **Services**: Handle business logic and act as an intermediary between controllers and repositories.
- **Repositories**: Encapsulate database queries, adhering to the Repository pattern.

Example:
- **Service**: `app/Services/UserService.php`
- **Repository**: `app/Repositories/UserRepository.php`

### **UI Integration**
- **Metronic 8.2.0** is included under `resources/views` and `public/assets`.

---

## **Usage**

### Create a New Service and Repository Manually
Since the `php artisan make:service` command is unavailable, you will need to create services manually:
1. Create a new service file in the `app/Services` directory. For example, create `UserService.php`:
   ```php
   // app/Services/UserService.php

   namespace App\Services;

   use App\Repositories\UserRepository;

   class UserService
   {
       protected $userRepository;

       public function __construct(UserRepository $userRepository)
       {
           $this->userRepository = $userRepository;
       }

       public function getAllUsers()
       {
           return $this->userRepository->all();
       }
   }
   ```
2. Create the corresponding repository in the `app/Repositories` directory. For example, create `UserRepository.php`:
   ```php
   // app/Repositories/UserRepository.php

   namespace App\Repositories;

   use App\Models\User;

   class UserRepository
   {
       public function all()
       {
           return User::all();
       }
   }
   ```

3. Inject and use the service in your controller:
   ```php
   // app/Http/Controllers/UserController.php

   namespace App\Http\Controllers;

   use App\Services\UserService;

   class UserController extends Controller
   {
       protected $userService;

       public function __construct(UserService $userService)
       {
           $this->userService = $userService;
       }

       public function index()
       {
           $users = $this->userService->getAllUsers();
           return view('users.index', compact('users'));
       }
   }
   ```

### Custom Core Usage
- **BaseModel**:
  ```php
  use App\Core\BaseModel;

  class User extends BaseModel
  {
      protected $table = 'users';
  }
  ```
- **BaseResponse**:
  ```php
  use App\Core\BaseResponse;

  return BaseResponse::success('Data retrieved successfully', $data);
  ```

---

## **Metronic Bootstrap Documentation**
For further documentation on the Metronic 8.2.0 Bootstrap theme, refer to the official documentation:
[Metronic 8.2.0 Documentation](https://preview.keenthemes.com/html/metronic/docs/index)

---


## **License**
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

## **Credits**
- Laravel: [https://laravel.com](https://laravel.com)
- Metronic: [https://keenthemes.com/metronic](https://keenthemes.com/metronic)
- Prettus Laravel Repositories: [https://github.com/andersao/l5-repository](https://github.com/andersao/l5-repository)

---

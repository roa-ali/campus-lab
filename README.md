# Laravel and GitHub Lab

## Project Description
This project was created as part of a Laravel and GitHub laboratory exercise. It demonstrates Laravel project setup, routing, route parameters, controllers, and GitHub version control.

## Technologies Used
- PHP
- Laravel
- Git
- GitHub

## Implemented Routes

| HTTP Method | URI | Description |
|---|---|---|
| GET | `/hello` | Displays Hello Laravel |
| GET | `/students` | Displays all students |
| GET | `/students/{id}` | Displays the student ID |
| POST | `/students` | Creates a student |
| PUT | `/students/{id}` | Updates a student |
| DELETE | `/students/{id}` | Deletes a student |
| GET | `/courses/{courseId}/students` | Displays the course ID |
| GET | `/products/{id}` | Displays the product ID and accepts numeric IDs only |

## Controllers

### StudentController
The `StudentController` includes the following methods:
- `index()` — Displays all students.
- `show($id)` — Displays a specific student ID.
- `create()` — Returns a message for creating a student.
- `store()` — Returns a student creation message.
- `update($id)` — Returns a student update message.
- `destroy($id)` — Returns a student deletion message.

### CourseController
The `CourseController` contains the `students($courseId)` method, which displays the course ID.

## How to Run the Project

1. Install PHP and Composer.
2. Open the project directory in the terminal.
3. Install project dependencies:

   ```bash
   composer install
   ```

4. Configure the environment file if needed:

   ```bash
   cp .env.example .env
   ```

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Run database migrations:

   ```bash
   php artisan migrate
   ```

7. Start the Laravel development server:

   ```bash
   php artisan serve
   ```

8. Open `http://127.0.0.1:8000` in your browser.

## GitHub Repository
Repository: https://github.com/roa-ali/campus-lab

## Security
The `.env` file is excluded from version control and should not be uploaded to GitHub.
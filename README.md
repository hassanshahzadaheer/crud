## CRUD Application with Laravel - README

This repository contains a simple CRUD (Create, Read, Update, Delete) application built using Laravel. The application manages tasks with just one field: "task_name."

### Setup Instructions

1. Clone the repository to your local machine:

   ```bash
   git clone [Repo URL](https://github.com/hassanshahzadaheer/crud.git)
   cd crud-app
   ```

2. Install project dependencies:

   ```bash
   composer install
   ```

3. Create a new database for the application and update the database connection information in the `.env` file.

4. Run database migrations to create the necessary table:

   ```bash
   php artisan migrate
   ```

5. Seed the database with sample data for testing and development purposes:

   ```bash
   php artisan db:seed
   ```

### Application Structure

- **Routes:** The application defines routes in `routes/web.php` for performing CRUD operations on tasks.

- **Controllers:** The `Tasks` controller handles all CRUD operations for tasks. It is located in the `app/Http/Controllers` directory.

- **Models:** The `Task` model represents the "tasks" table in the database. It is located in the `app/Models` directory.

- **Views:** The Blade views for the application are in the `resources/views/tasks` directory. The views allow users to create, view, edit, and delete tasks.

### Run the Application

Start the development server to run the application:

```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser to see the list of tasks. From there, you can add new tasks, view task details, edit existing tasks, and delete tasks.

### AJAX-based View and Edit Functionality

We have recently added AJAX-based functionality to improve user experience for viewing and editing tasks:

#### View Task Details

- When you click the "View" button next to a task in the list, a modal will open showing the task details, including the task ID and task name.

#### Edit Task

- When you click the "Edit" button next to a task in the list, a modal will open with an edit form.
- The form will display the current task name, and you can edit it.
- Upon clicking the "Save" button in the modal, an AJAX request will be sent to update the task name without refreshing the page.

### Testing

The repository includes some basic test cases for the `TaskController`. To run the tests, use the following command:

```bash
php artisan test
```

### Additional Information

The application utilizes Laravel's model factories and database seeding to populate the database with sample data. The `TaskFactory` generates random task names for seeding.

For more information on how to modify or extend the application, refer to the code and comments in the respective files.

### Enjoy Building!

This project provides a simple starting point for building more complex web applications using Laravel. Feel free to explore and enhance it to suit your requirements. Happy coding!

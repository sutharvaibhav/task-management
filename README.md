#Task Management System (myTask Management)

This task management system is built with Laravel 11. 
This helps users manage tasks, prioritize them and assign members. 

#Features

- **Dashboard**: Displays key metrics including total tasks, completed tasks, total members, and total projects for quick project and team insights.

- **Team Member**: Allows admins to create, update, and delete team members, managing access and roles within the system.

- **Project**: Enables admins to create, update, and delete projects, organizing tasks and team assignments within the system.

- **Task Management**: Allows admins and users to create, update, and manage tasks with priority, project assignment, team member assignment, status (pending/completed), and detailed task descriptions.

- **Drag-and-Drop Task Reordering**: Provides an intuitive interface for users to reorder tasks by simply dragging and dropping them to adjust.


#Instructions

1. **Install Composer dependencies** (if required):
    ```
    composer install
    ```

2. **Create and configure the database**:
    - Create a new database in your database server.
    
        ```
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=taskmanagement
        DB_USERNAME=root
        DB_PASSWORD=
        ```

3. **Run migrations**:
    ```
    php artisan migrate
    ```

4. **Start the development server**:
    ```
    php artisan serve
    ```

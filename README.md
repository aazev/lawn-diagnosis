# Issue Management Application

A simple application to manage, edit, and review issues.

## Features

1. **Display Issues:**

    - Issues are color-coded based on their score.
    - Easily view issues with their descriptions.
    - Scores are represented with a percentage value.

2. **Add & Remove Issues:**

    - Quickly add new issues with associated parameters.
    - Effortlessly remove issues with a single click.

3. **Score System:**

    - Each issue has a score ranging from 0% to 100%.
    - Scores are determined based on set parameters and can be modified accordingly.

4. **Context Management:**
    - Application uses React Context for state management.
    - Easy integration and scalability.

## How to Use

1. Navigate to the main dashboard to see all the issues listed.
2. Use the `Edit` button on an issue to modify its parameters.
3. Click on the `Remove` button to delete any issue.
4. Use the `Add New Issue` button to introduce a new issue to the list.

## Development

To get started with development:

```bash
composer install
cp .env.example .env
php artisan key:generate
make start
pnpm install
pnpm dev
```

## Database

This project includes a docker container that runs our mysql database, please make use of the following commands:

### Make Commands

Our application uses a series of make commands to simplify various development and operations tasks:

-   **`make start`**: Starts the database container.
-   **`make stop`**: Stops the running Docker container.
-   **`make logs`**: Retrieves and displays logs from the Docker container. Helps in diagnosing any issues or monitoring database behavior.
-   **`make connect-db`**: Establishes a connection to the database inside the Docker container.

To execute any of these commands, navigate to the root directory of the project in your terminal and run:

```bash
make [command]
```

For example, to start our development database:

```bash
make start
```

## Feedback & Contributions

Feel free to open issues for feedback or suggestions. Pull requests are always welcome!

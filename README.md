<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->

<a id="readme-top"></a>

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]

<br />
<div align="center">
  <a href="https://github.com/drklemfuss/inertia-react">
    <img src="images/logo.png" alt="Logo" width="80" height="80">
  </a>

<h3 align="center">Laravel 11 Starter with Inertia.js and React</h3>

  <p align="center">
    A starter project for Laravel 11, Inertia.js, and React 18 with modern UI and Docker support.
    <br />
    <a href="https://github.com/drklemfuss/inertia-react"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/drklemfuss/inertia-react">View Demo</a>
    ·
    <a href="https://github.com/drklemfuss/inertia-react/issues/new?labels=bug&template=bug-report---.md">Report Bug</a>
    ·
    <a href="https://github.com/drklemfuss/inertia-react/issues/new?labels=enhancement&template=feature-request---.md">Request Feature</a>
  </p>
</div>

## About The Project

This project is a starter for developing applications with Laravel 11, Inertia.js, and React 18, styled using ShadCN. It provides a modern development experience using Docker, which includes a pre-configured development environment.

Key features include:

-   **Authentication:** Built-in user authentication via Laravel Breeze, including login, register, password reset, and email verification pages styled with ShadCN.
-   **UI/Styling:** Landing pages designed with ShadCN (inspired by Leo Mirando’s work). Custom authentication pages for login, register, and password reset.
-   **Models & Examples:**
    -   Example models to demonstrate Laravel Eloquent ORM, such as `Tasks` (associated with users) and `Countries` (static data).
    -   Example controllers, policies, and routes to illustrate various use cases.
-   **Role-Based Access Control:** Using Spatie Laravel-Permissions for roles and permissions, with predefined `admin` and `user` roles.
-   **Admin Panel:** Integrated with Filament v3 to manage resources with CRUD views, log viewing plugins, and permission management interfaces.
-   **Dockerized Setup:** Docker Compose environment includes:
    -   Nginx web server with development configuration for HTTP.
    -   Adminer for lightweight database management.
    -   PostgreSQL 15 (modifiable via `.env` and compose file).

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Built With

-   [![React][React.js]][React-url]
-   [![Laravel][Laravel.com]][Laravel-url]
-   [![TailwindCSS][TailwindCSS.com]][TailwindCSS-url]

## Getting Started

### Prerequisites

-   Clone the repository
-   Copy the example `.env` file and modify it as needed (especially database configurations).
-   Run `php artisan key:generate` to create an application key.

### Installation

#### Running Locally

1. Install PHP 8.3 and Composer.
    ```sh
    composer install
    ```
2. Start Laravel’s development server.
    ```sh
    php artisan serve
    ```
3. Install Node.js 20+ and PNPM.
    ```sh
    pnpm install
    pnpm dev
    ```

#### Using Docker Compose

1. Install Docker and Docker Compose.
2. Build and start the containers.
    ```sh
    docker compose -f docker-compose.dev.yml up --build
    ```
3. Migrate and seed the database.
    ```sh
    docker exec -it dev-app1 bash
    php artisan migrate:fresh --seed
    ```
4. Access the site on `http://localhost:8088` (port configurable in the compose file).

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Usage

This project serves as a starter kit for developing Laravel applications with modern UI and authentication. It’s pre-configured for local development using Vite and Docker.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Roadmap

-   [ ] Add support for notifications and queuing via Laravel Echo.
-   [ ] Integrate Supervisord for process management in Docker.
-   [ ] Upgrade to React 19 upon stable release.
-   [ ] Extend dashboard functionality with generic features.
-   [ ] Add SAAS-related functionality in separate branches.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Contributing

Contributions are welcome! Fork the project and create a pull request.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## License

Distributed under the MIT License.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Acknowledgments

-   Special thanks to Leo Mirando for UI inspirations.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

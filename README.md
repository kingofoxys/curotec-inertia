# App for testing Inertia.js with Laravel to be used with Docker for a local development environment
# Testing for curotec

# Instructions

1. Clone the repository
2. Run `docker compose up`
3. Run `docker compose exec testinertiaapp php artisan migrate`
4. Run `docker compose exec testinertiaapp php artisan db:seed`
5. Run `composer install`
6. Run `npm install`


# Testing requirements
STORY-001

Implement Resource Management System

User Story

Implement Inertia.js to demonstrate resource management

Acceptance Criteria

Create a resourceful Vue component to manage resources.

Implement CRUD operations using Inertia.js and Laravel controllers.

Validate and handle errors on both frontend and backend.

Technical Focus
Inertia.js integration patterns

Laravel resource controllers

Form validation and error handling
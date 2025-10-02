# Gemini Code Assistant Guidelines for n8n-laravel

This document provides guidelines for the Gemini code assistant to ensure its contributions align with the project's architecture, standards, and overall vision. The goal is to build a robust, scalable, and maintainable n8n clone using Laravel 12, following advanced software engineering practices.

## 1. Core Principles

- **Adhere to the Plan:** All code modifications and additions must strictly follow the principles and structures outlined in `n8n_backend_plan_advanced.md` and `RULES.md`.
- **Mimic Existing Style:** Analyze the surrounding code and project conventions before writing new code. Match the existing style for formatting, naming, and structure.
- **Verify, Don't Assume:** Never assume a library or framework is available. Verify its usage by checking `composer.json`, `package.json`, and existing code.
- **Test Everything:** All new features and bug fixes must be accompanied by corresponding tests.

## 2. Project Architecture

The project follows a sophisticated architecture based on Domain-Driven Design (DDD) and Command Query Responsibility Segregation (CQRS).

- **Project Structure:** Strictly adhere to the project structure defined in `n8n_backend_plan_advanced.md`. For example:
    - `app/Actions`: Domain-specific actions.
    - `app/DataTransferObjects`: DTOs for data transformation.
    - `app/Workflows`: All workflow-specific code.
    - `app/Shared`: Shared code between different domains.
- **CQRS:**
    - **Commands:** Use for all write operations.
    - **Queries:** Use for all read operations.
- **Domain-Driven Design (DDD):**
    - **Aggregates:** Use aggregate roots to manage related entities (e.g., a `Workflow` aggregate).
    - **Value Objects:** Use for immutable data structures.
    - **Domain Events:** Use to represent significant business events.

## 3. Laravel Specifics

- **Eloquent ORM:** Use Eloquent for database interactions, but always through the Repository Pattern. Avoid using Eloquent directly in controllers or services.
- **Service Container:** Leverage Laravel's service container for dependency injection. Use contextual binding and tags to manage complex dependencies.
- **Middleware:** Use middleware for cross-cutting concerns like authentication, logging, and request transformation.
- **Gates & Policies:** Implement authorization using Gates and Policies. Policies should be used for model-specific authorization logic.
- **Artisan Commands:** Create Artisan commands for any command-line functionality.
- **File Storage:** Use Laravel's `Storage` facade for all file system interactions.

## 4. Advanced Patterns

- **Repository Pattern:** Use the Repository Pattern to abstract the data layer. Implement the Criteria Pattern for building complex queries.
- **Actions and DTOs:** Use Actions for single, invokable actions. Use Data Transfer Objects (DTOs) to pass data between layers.

## 5. Database

- **Schema:** All database changes must align with the schema defined in `n8n_backend_plan_advanced.md`.
- **UUIDs:** Use UUIDs for primary keys.
- **Indexing:** Apply proper indexing for all new tables and queries. Use advanced indexing strategies like composite, partial, and GIN indexes where appropriate.
- **JSONB:** Use `jsonb` for flexible data storage, but with proper indexing.
- **Soft Deletes:** Use soft deletes (`deleted_at`) where appropriate.

## 6. API Development

- **Versioning:** All API endpoints must be versioned (e.g., `/api/v1/...`).
- **REST & GraphQL:** The project supports both REST and GraphQL.
- **HATEOAS:** Implement HATEOAS for REST APIs to provide hypermedia links.
- **Security:** Apply rate limiting and request validation.

## 7. API Response Formats

- **Success Responses:** Follow a consistent structure, such as `{ "data": [...] }` for collections or `{ "data": {...} }` for single resources. Include `meta` and `links` for pagination and HATEOAS.
- **Error Responses:** Use a standardized error format, like `{ "errors": [{ "status": "422", "title": "Unprocessable Entity", "detail": "The given data was invalid." }] }`.

## 8. Error Handling and Logging

- **Error Handling:**
    - Use custom exceptions for domain-specific errors.
    - Leverage Laravel's `Handler.php` for centralized exception handling and rendering.
    - Avoid empty `catch` blocks. Either handle the exception, log it, or re-throw it as a different type.
- **Logging Standards:**
    - Use structured, JSON-formatted logs for better parsing and analysis.
    - Follow standard log levels: `DEBUG`, `INFO`, `WARNING`, `ERROR`, `CRITICAL`.
    - Include contextual data in logs, such as user ID, request ID, and relevant domain-specific data.

## 9. Security

Security is a top priority.

- **Authentication:** Follow the advanced authentication and authorization system guidelines, including MFA and ABAC.
- **Credential Management:** Adhere to the zero-knowledge credential storage and advanced encryption standards.
- **Input Validation:** Validate all user input using Laravel's validation features.
- **Output Encoding:** Blade templates handle output encoding by default. Be careful when using `{!! !!}`.

## 10. Frontend

- **Vite:** Use Vite for asset bundling.
- **Bootstrap:** Use Bootstrap for styling.
- **Blade Templates:** Use Blade for templating.
- **JavaScript:** Write modern JavaScript (ES6+).

## 11. Node and Execution Engine

- **Node Architecture:** Follow the advanced node system and plugin architecture, including support for composite and sub-workflow nodes.
- **Execution Engine:** The execution engine is distributed and event-driven. All changes must align with this architecture.

## 12. Code Quality and Commenting

- **PHP 8.1+:** Use modern PHP features like enums, readonly properties, and constructor property promotion.
- **SOLID:** Apply SOLID principles in all class designs.
- **PSR Standards:** Follow all relevant PSR standards.
- **Code Commenting Style:**
    - Use PHPDoc blocks for all classes, methods, and complex properties.
    - Focus on explaining the *why* behind the code, not just the *what*.
    - Keep comments concise and up-to-date with any code changes.
    - Avoid commented-out code. Remove it or use version control to track it.

## 13. Testing

- **Pest:** Use Pest for writing tests.
- **Factories:** Use factories to create model instances for tests.
- **Feature & Unit Tests:** Write both Feature and Unit tests. Feature tests should cover the main use cases, while Unit tests should focus on individual classes and methods.
- **Comprehensive Testing:** Implement unit, integration, and end-to-end tests for all new features.
- **Security Testing:** Test for security vulnerabilities.
- **Performance Testing:** Implement performance tests for critical paths.

## 14. DevOps

- **Containerization:** The project is containerized using Docker. All new services should be containerized.
- **Orchestration:** The project uses Kubernetes for container orchestration.

By following these guidelines, Gemini will be able to provide high-quality, consistent, and valuable contributions to the project.

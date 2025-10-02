# n8n Clone Backend Development Rules

## Project Structure Rules
- Use the specified advanced project structure with Actions, DTOs, Enums, Events, etc.
- Place workflow-specific code in the Workflows directory
- Place shared code in the Shared directory
- Use ValueObjects for immutable data structures
- Organize HTTP controllers by API version (V1, V2, etc.)

## Architecture Rules
- Implement CQRS pattern with Commands for write operations and Queries for read operations
- Apply Domain-Driven Design with proper Aggregates, Value Objects, and Bounded Contexts
- Use Repository pattern with Criteria and Specification patterns for complex queries
- Implement Event Sourcing to store workflow changes as a sequence of events
- Apply Dependency Injection with Service Container Tags, Contextual Binding, and Decorators

## Database Rules
- Use UUID primary keys for all tables
- Implement proper indexing strategy with composite, partial, and GIN indexes
- Use JSONB for flexible data storage with proper indexing
- Implement database partitioning for large datasets (time-based, workflow-based)
- Use soft deletes with deleted_at columns where appropriate
- Include full-text search capabilities with tsvector columns

## Security Rules
- Implement multi-factor authentication with TOTP, SMS, and hardware keys
- Use Attribute-Based Access Control (ABAC) for fine-grained permissions
- Apply zero-knowledge credential storage with client-side encryption
- Use AES-256-GCM for encryption with integrity verification
- Implement advanced session management with token rotation
- Apply zero-trust principles for all system interactions

## API Rules
- Support both REST and GraphQL APIs with proper versioning
- Implement HATEOAS for hypermedia-driven APIs
- Use progressive responses for long-running operations
- Support bulk operations for efficiency
- Implement proper error handling and response formats
- Apply rate limiting and request validation at the gateway level

## Execution Engine Rules
- Implement distributed execution across multiple services
- Support parallel execution with resource management
- Apply checkpointing and state snapshotting for recovery
- Implement sophisticated retry mechanisms with exponential backoff
- Use circuit breakers for handling service failures
- Track execution performance metrics and resource utilization

## Node System Rules
- Support composite and sub-workflow nodes
- Implement AI/ML capabilities in nodes
- Enable stateful nodes that maintain state across executions
- Apply sandboxed execution for security
- Support dynamic configuration and A/B testing of nodes
- Implement proper node communication with message queues

## Webhook and Trigger Rules
- Implement event-driven architecture with event sourcing
- Support streaming and real-time event processing
- Apply advanced security with mutual TLS and signature verification
- Ensure at-least-once delivery guarantees
- Implement duplicate detection and idempotency
- Support complex scheduling patterns with dependency handling

## Deployment and Scaling Rules
- Use container orchestration with Kubernetes
- Implement multi-cloud deployment strategies
- Apply auto-scaling based on demand with predictive scaling
- Use service mesh for advanced service communication
- Implement comprehensive monitoring with distributed tracing
- Apply chaos engineering to test resilience

## Credential Management Rules
- Encrypt all credential data using advanced encryption standards
- Implement just-in-time credential generation
- Support federated credential management
- Apply fine-grained sharing mechanisms
- Implement credential lifecycle management with automated rotation
- Use attribute-based policies for credential access

## Code Quality and Standards
- Use PHP 8.1+ features including enums and typed properties
- Apply SOLID principles in all class designs
- Implement comprehensive logging with structured data
- Use proper exception handling with custom exceptions
- Apply design patterns appropriately (Strategy, Observer, Command, etc.)
- Follow PSR standards and Laravel best practices

## Testing Rules
- Implement comprehensive unit, integration, and end-to-end tests
- Use feature flags for safe deployment of new functionality
- Apply testing strategies for distributed systems
- Test security features including penetration testing
- Implement performance testing for all critical paths
- Use contract testing for API integrations

## Monitoring and Observability
- Implement distributed tracing across all services
- Collect comprehensive metrics using Prometheus
- Aggregate logs using ELK stack or similar
- Monitor performance baselines and detect anomalies
- Track business metrics alongside technical metrics
- Implement alerting for critical system events

## Data Management
- Implement data archiving strategies for old data
- Apply proper data retention policies
- Classify data by sensitivity and apply appropriate controls
- Track data lineage across the system
- Implement data governance measures
- Use appropriate consistency models for different use cases

## Performance Optimization
- Implement multi-level caching strategies
- Optimize database queries with proper indexing
- Use connection pooling for database connections
- Apply resource optimization based on usage patterns
- Implement CDN for static assets
- Use compression for large data transfers
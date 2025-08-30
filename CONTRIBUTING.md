# Contributing to CUXPRESS

Thank you for your interest in contributing to CUXPRESS! We welcome contributions from the community.

## How to Contribute

### Reporting Bugs

1. Check if the bug has already been reported in the [Issues](https://github.com/yourusername/CUXPRESS/issues)
2. If not, create a new issue with:
   - Clear title and description
   - Steps to reproduce
   - Expected vs actual behavior
   - Screenshots if applicable
   - Your environment details (PHP version, MySQL version, browser)

### Suggesting Features

1. Check if the feature has already been suggested
2. Open a new issue with the `enhancement` label
3. Describe the feature and its use case
4. Explain why this would be useful

### Code Contributions

1. Fork the repository
2. Create a new branch for your feature/fix:
   ```bash
   git checkout -b feature/your-feature-name
   ```
3. Make your changes following our coding standards
4. Test your changes thoroughly
5. Commit with clear messages:
   ```bash
   git commit -m "Add: Brief description of what you added"
   git commit -m "Fix: Brief description of what you fixed"
   git commit -m "Update: Brief description of what you updated"
   ```
6. Push to your fork:
   ```bash
   git push origin feature/your-feature-name
   ```
7. Create a Pull Request

## Coding Standards

### PHP
- Follow PSR-12 coding standard
- Use meaningful variable and function names
- Comment complex logic
- Escape all user inputs
- Use prepared statements for database queries

### Database
- Use lowercase for table and column names
- Use underscores for multi-word names (e.g., `order_detail`)
- Add appropriate indexes for performance
- Include foreign key constraints

### Git Commit Messages
- Use present tense ("Add feature" not "Added feature")
- Keep the first line under 50 characters
- Reference issue numbers when applicable

### Testing
- Test your changes with different user roles
- Verify database transactions work correctly
- Check for SQL injection vulnerabilities
- Test on different browsers

## Development Setup

1. Follow the installation instructions in README.md
2. Enable `DEBUG_MODE` in your `config.php`
3. Use meaningful test data
4. Don't commit test data to the repository

## Code Review Process

1. All submissions require review before merging
2. We'll provide feedback if changes are needed
3. Once approved, we'll merge your contribution

## Questions?

Feel free to open an issue for any questions about contributing.

Thank you for helping make CUXPRESS better!
# CUXPRESS - Online Food Ordering System

A web-based food ordering platform that connects customers with local restaurants, built with PHP and MySQL.

## Features

- **Customer Features**
  - User registration and authentication
  - Browse restaurants and menus
  - Shopping cart functionality
  - Order tracking and history
  - Profile management
  - Password reset functionality

- **Admin Features**
  - Restaurant management
  - Menu and food item management
  - Order management and tracking
  - Customer management
  - Revenue reports
  - Shop-specific order views

## Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server
- XAMPP/WAMP/LAMP stack (optional)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/CUXPRESS.git
cd CUXPRESS
```

2. Import the database:
```bash
mysql -u your_username -p your_database_name < cufeast.sql
```

3. Configure the database connection:
```bash
cp config.sample.php config.php
```
Edit `config.php` with your database credentials:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
define('DB_NAME', 'cufeast');
```

4. Set up your web server to point to the project directory

5. Access the application:
- Customer portal: `http://localhost/CUXPRESS/`
- Admin portal: `http://localhost/CUXPRESS/admin/`

## Project Structure

```
CUXPRESS/
├── admin/              # Admin panel files
│   ├── admin_*.php    # Admin functionality pages
│   └── nav_header_admin.php
├── css/               # Stylesheets
│   ├── login.css
│   ├── main.css
│   └── menu.css
├── img/               # Image assets
├── cust_*.php         # Customer functionality pages
├── conn_db.php        # Database connection
├── config.php         # Configuration file (create from sample)
├── config.sample.php  # Sample configuration
└── index.php          # Main entry point
```

## Database Schema

The application uses a MySQL database with the following main tables:
- `customer` - User accounts
- `shop` - Restaurant information
- `food` - Menu items
- `cart` - Shopping cart items
- `order_header` - Order information
- `order_detail` - Order line items

## Security Considerations

- Never commit `config.php` with real credentials
- Use strong passwords for database access
- Keep the database credentials secure
- Regularly update PHP and MySQL versions
- Implement HTTPS in production

## Technologies Used

- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript
- **Styling**: Bootstrap (via CDN)

## License

This project is licensed under the Apache License 2.0 - see the [LICENSE](LICENSE) file for details.

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## Support

For issues and questions, please open an issue in the GitHub repository.

## Authors

- Pratik Kaushal - Initial work

## Acknowledgments

- Built as a food ordering system for local restaurants
- Inspired by modern food delivery platforms

# Manik-PHP-Calculator

Manik-PHP-Calculator is a simple calculator application written in PHP that allows users to perform addition, subtraction, multiplication, and division operations.

## Installation

### Prerequisites
- Ubuntu 22.04 LTS
- Docker
- Git

### Steps

1. Clone the repository from GitHub
    ```
    git clone git@github.com:manikcloud/manik-php-calculator.git -b main
    ```
2. Install PHP and required extensions
    ```
    sudo apt install php libapache2-mod-php php-mysql php-curl php-gd php-json php-zip php-mbstring -y
    ```
3. Build the Docker image
    ```
    sudo docker build -t manikphp-calculator .
    ```
4. Run the Docker container
    ```
    sudo docker run -d -p 80:80 --name manikphp-calculator manikphp-calculator
    ```

## Usage
- Open your web browser and navigate to http://localhost to access the calculator.

## AWS Security Group

To allow access to the application from the internet, add the following inbound rule to the security group of your AWS instance:
- Type: HTTP
- Port: 80
- Source: 0.0.0.0/0

## Version
PHP version: 8.0.11

Check PHP version with the following command:
```
php -v

```
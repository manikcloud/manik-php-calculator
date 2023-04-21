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
2.1 Version: Check PHP version with the following command:
    ```
    php -v

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

## AWS Security Group Configuration

If you want to deploy this application on an AWS EC2 instance, you will need to configure the security group to allow incoming traffic on port 80. Here are the steps to do so:

1. Go to the AWS EC2 dashboard and navigate to the Security Groups section.

2. Select the security group that is associated with your EC2 instance.

3. Click on the "Edit inbound rules" button.

4. Click on the "Add Rule" button.

5. Set the following values:

- Type: HTTP
- Protocol: TCP
- Port range: 80
- Source: Anywhere (0.0.0.0/0)

6. Click on the "Save rules" button.

Now you should be able to access the Manik-PHP-Calculator application on your AWS EC2 instance by navigating to the public IP address of your instance in your web browser.

Example Url: http://44.206.250.166

Note: Make sure to secure your application by using HTTPS instead of HTTP if you are deploying it on a public-facing server.



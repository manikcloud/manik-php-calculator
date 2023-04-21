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

## Project Structure

manik-php-calculator
├── Dockerfile
├── README.md
├── build.xml
└── index.php

## Prerequisites

- PHP 7.4 or later
- Apache Web Server
- Docker (optional)
- Apache Ant (optional, required for building the Docker image using the build.xml file)
- Jenkins (optional, required for setting up CI/CD pipeline)

## Setup and Usage

### Without Docker

1. Clone the repository or download the source files.
2. Place the project files in your Apache web server's document root.
3. Visit the index.php file in your web browser, e.g., http://localhost/index.php.

### With Docker

1. Clone the repository or download the source files.
2. Navigate to the project directory in your terminal.
3. Install Apache Ant if you haven't already. Ant is a Java-based build tool that helps automate build processes. In this project, Ant is used to build the Docker image using the build.xml file.
4. Build the Docker image:
    ```
    ant build-docker-image -Ddocker.image.name=manik-php-calculator -Ddocker.file.name=Dockerfile
    ```
5. Run the Docker container:
    ```
    docker run -d -p 80:80 --name manik-php-calculator manik-php-calculator
    ```
6. Visit the calculator in your web browser at http://localhost.

### Setting up a Jenkins Job

1. Install and set up Jenkins if you haven't already.
2. Create a new Jenkins job as a "Freestyle project."
3. Under "Source Code Management," select "Git" and enter the repository URL.
4. In the "Build" section, click "Add build step" and choose "Invoke Ant."
5. In the "Targets" field, enter "build-docker-image" to specify the Ant target from the build.xml file.
6. Save the job configuration.
7. Run the job to build the Docker image using Jenkins.

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

Now you should be able to access the Manik-PHP-Calculator application on your AWS EC2 instance by navigating to the

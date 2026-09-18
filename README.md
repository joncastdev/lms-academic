## Introduction

Lms academic

## About
A powerful lms academic online

- Follow the creator Jonathan Castro:
    - YouTube: **[youtube.com/@joncastdev](https://youtube.com/@joncastdev)** — Videos every week
    - Twitch: **[twitch.tv/joncastdev](https://twitch.tv/joncastdev)** — Live coding on Mondays, Wednesdays, and Fridays at 9PM UTC
    - LinkedIn: **[linkedin.com/in/joncastdev](https://www.linkedin.com/in/joncastdev)**
    - Instagram: **[instagram.com/joncastdev](https://www.instagram.com/joncastdev)**
    - Tiktok: **[tiktok.com/@joncastdev](https://www.tiktok.com/@joncastdev)**

## Starting

_These instructions will allow you to get a copy of the project running on your local machine for development and testing purposes._


## Setup

- PHP 8.3 <=
- PostgreSQL (Or MySQL)
- [Composer](https://getcomposer.org/)

## Additional details on dependencies
Assuming you're running Ubuntu, and then install all dependencies from the following list:

sudo apt-get install php8.3 php8.3-pgsql php8.3-mysql php8.3-intl php8.3-json php8.3-mbstring

## Installation

The following steps are meant to be used on a development server.

- Composer

```bash
$ composer create-project joncastdev/lms-academic
``` 


- Clone Project

```bash
$ git clone https://github.com/jonathanc/opengiscrm-codeigniter4.git
``` 
- Setup vendor libraries 

```bash
$ composer install
```
- Run server 

```bash
$ php spark serve
```
- Create Database and Run migrations

```bash
$ php spark db:create 
```

```bash
$ php spark migrate -all
```

- Run seeds

```bash 
$ truncate table courses;
```

```bash
$ php spark db:seed LoadSeeder
```


## Access:

_Admin: admin@gmail.com
_Pass: Test1234

_User: free@gmail.com
_Pass: Test1234

_User: vip@gmail.com
_Pass: Test1234

## Technologies 🛠️

* [CodeIgniter 4](https://codeigniter.com/user_guide/index.html)
* [Email Tool](https://mailtrap.io?ref=jonathan61)  


## Author ✒️

* **Jonathan Castro** - *Software Engineer* - [joncastdev](https://github.com/joncastdev)


## Support

_joncastdev@gmail.com_

* If you would like a business forum with many extra features, please contact us with your requirements and budget. Thank you.


## Donations

* [Paypal](https://www.paypal.com/paypalme/programadorjonathan) - Thank you very much for your contribution.

* [Ko-Fi](https://ko-fi.com/foroworkers) - Thank you very much for your contribution.

* [Patreon](https://www.patreon.com/c/foroworkers) - Thank you very much for your contribution.




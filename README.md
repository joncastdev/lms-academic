## Introduction

Laravel open source forum to manage online communities.

## About
A powerful Open Source Business Forum that can be installed on your server.Open source Laravel Forum

- Follow the creator Jonathan Castro:
    - YouTube: **[youtube.com/@joncastdev](https://youtube.com/@joncastdev)** — Videos every week
    - Twitch: **[twitch.tv/joncastdev](https://twitch.tv/joncastdev)** — Live coding on Mondays, Wednesdays, and Fridays at 9PM UTC
    - LinkedIn: **[linkedin.com/in/joncastdev](https://www.linkedin.com/in/joncastdev)**
    - Instagram: **[instagram.com/joncastdev](https://www.instagram.com/joncastdev)**
    - Tiktok: **[tiktok.com/@joncastdev](https://www.tiktok.com/@joncastdev)**

## Starting

_These instructions will allow you to get a copy of the project running on your local machine for development and testing purposes._


## Setup

- PHP 7.4 <=
- PostgreSQL (Or MySQL)
- [Composer](https://getcomposer.org/)

## Additional details on dependencies
Assuming you're running Ubuntu, and then install all dependencies from the following list:

sudo apt-get install php7.4 php7.4-pgsql php7.4-mysql php7.4-intl php7.4-json php7.4-mbstring

## Installation

The following steps are meant to be used on a development server.


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




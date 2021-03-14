## ZITRO-TEST

### Description
This project was made to realise the technical test for Zitro.

The test consist on make a Login and authenticate the users through XML file where the data is stored.

### Usage
1. Clone this repo

```
git@github.com:CarlosEstebanCasado/zitro-test.git
```

2. Install project dependencies

```
cd zitro-test
```

```
composer install
```

3. However for local development, the most convenient way of running Symfony is by using the local web server provided by the [symfony binary](https://symfony.com/doc/current/setup/symfony_server.html). This local server provides among other things support for HTTP/2, concurrent requests, TLS/SSL and automatic generation of security certificates.

```
symfony server:start
```

- Open your browser and navigate to `http://localhost:8080`
- If everything is working, you’ll see a **login** page. 

### Tests
I did some functional testing on this project for the first time. Once the above steps have been completed you can run the tests to see if are passing with the next command.

```
./vendor/bin/simple-phpunit
```

### Data persistence
As required, the user data has been stored in an XML file called **users.xml**. You can find it at the root of the project.

### Diagram
The diagram is also stored at the root of the project, its name is **relational-diagram.png**

### Make Login
There are two users available to make a succes login on the aplication:
- email:`carlos.esteban.casado@gmail.com`, password: `qwerty`
- email:`admin@gmail.com`, password: `123456` 
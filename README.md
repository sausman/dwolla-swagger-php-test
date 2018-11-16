# dwolla-swagger-php-test

Tests the creation of a customer using [dwolla-swagger-php](https://github.com/Dwolla/dwolla-swagger-php) 1.0.18 and PHP 7.0.

## Dependencies

- [Docker](https://www.docker.com/products/docker-desktop)

## Usage

```bash
$ git clone https://github.com/sausman/dwolla-swagger-php-test
$ cd dwolla-swagger-php-test
$ DWOLLA_TOKEN="YOUR-DWOLLA-TOKEN"
```

Using the Dwolla **sandbox** environment:

```bash
$ ./run.sh $DWOLLA_TOKEN
```

Using the Dwolla **production** environment:

```bash
$ ./run.sh $DWOLLA_TOKEN production
```

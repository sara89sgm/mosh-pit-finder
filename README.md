Mosh Pit Finder
==============

## Getting Started

Must have PHP machine setup for development PHP 5.3.x. (php -v)

### Installation

To get the source. Clone this repository locally

```bash
# clone and name application
git clone https://github.com/sara89sgm/mosh-pit-finder
cd mosh-pit-finder
```
All commands relative `caleche` directory.

### Install & Get Dependencies

```bash
php composer.phar install

#If that doesn't work try

curl -sS https://getcomposer.org/installer | php
php composer.phar install

```

#Start server


### Set Permissions

```bash
rm -rf app/cache/*
rm -rf app/logs/*
APACHEUSER=`ps aux | grep -E '[a]pache|[h]ttpd' | grep -v root | head -1 | cut -d\  -f1`
sudo chmod +a "$APACHEUSER allow delete,write,append,file_inherit,directory_inherit" app/cache app/logs
sudo chmod +a "`whoami` allow delete,write,append,file_inherit,directory_inherit" app/cache app/logs
```

### Run Functional Tests

```bash
../vendor/bin/phpunit
```






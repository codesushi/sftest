#!/bin/bash
#
set -x
sudo apt-get update
mkdir -p /etc/puppet/modules

puppet module install example42/puppi  --force
puppet module install example42/apache --force
puppet module install puppetlabs/stdlib  --force
puppet module install puppetlabs/apt  --force
puppet module install example42/php  --force
puppet module install puppetlabs/mysql  --force
puppet module install willdurand/composer --force
puppet module install maestrodev/wget --force

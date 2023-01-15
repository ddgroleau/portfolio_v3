#!/bin/bash

echo $1
echo $2

APP_PORT="$1" APP_NETWORK="$2"  ./vendor/bin/sail up --remove-orphans &
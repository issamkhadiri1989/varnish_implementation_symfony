FROM php:8.2-fpm

COPY composer.sh /
RUN chmod +x /composer.sh

RUN mkdir /scripts

RUN /composer.sh

RUN apt-get update && apt-get install -y \
	libzip-dev \
	wget \
	unzip \
    && docker-php-ext-configure zip \
    && docker-php-ext-install -j$(nproc) zip

RUN wget https://get.symfony.com/cli/installer -O - | bash
# RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony

WORKDIR /workspace
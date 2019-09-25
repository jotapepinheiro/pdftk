### https://github.com/mikehaertl/php-pdftk

# Instalar pdftk
Ubuntu 18.04
- sudo snap install pdftk

Ubuntu 16.04
- sudo apt install pdftk

## Laradock /Users/joaopinheiro/Dev/laradock/php-fpm/Dockerfile
#####################################
# pdftk:
#####################################

USER root

ARG INSTALL_PDFTK=true

RUN if [ ${INSTALL_PDFTK} = true ]; then \
	# Install all dependencies
	apt-get install -y pdftk \
;fi

![](arquivos/exemplo.pdf)
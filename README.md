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

<object data="arquivos/exemplo.pdf" type="application/pdf" width="700px" height="700px">
    <embed src="arquivos/exemplo.pdf">
        <p>This browser does not support PDFs. Please download the PDF to view it: <a href="arquivos/exemplo.pdf">Download PDF</a>.</p>
    </embed>
</object>
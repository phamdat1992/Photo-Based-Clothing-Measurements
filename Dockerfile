FROM richarvey/nginx-php-fpm:1.10.3
ADD nginx.conf /etc/nginx/sites-available/default.conf

RUN docker-php-ext-configure sysvsem
RUN docker-php-ext-install sysvsem
RUN docker-php-ext-configure sysvshm
RUN docker-php-ext-install sysvshm
RUN docker-php-ext-configure sysvmsg
RUN docker-php-ext-install sysvmsg

ARG MYSQL_HOST
ARG MYSQL_USERNAME
ARG MYSQL_PASSWORD
ARG COPYCAT_HOST
ARG COPYCAT_USERNAME
ARG COPYCAT_PASSWORD
ARG EMAIL_USERNAME
ARG EMAIL_PASSWORD
ARG GOOGLE_OAUTH_CLIENT_ID
ARG GOOGLE_OAUTH_CLIENT_SECRET
ARG GOOGLE_OAUTH_REDIRECT_URL_AGENT
ARG GOOGLE_OAUTH_REDIRECT_URL_PICKUP
ARG GOOGLE_API_KEY
ARG OMS_API_ID_KEY
ARG AWS_KEY
ARG AWS_SECRET
ARG AWS_BUCKET
ARG AWS_REGION
ARG AWS_VERSION

ENV MYSQL_HOST                          ${MYSQL_HOST}
ENV MYSQL_USERNAME                      ${MYSQL_USERNAME}
ENV MYSQL_PASSWORD                      ${MYSQL_PASSWORD}
ENV COPYCAT_HOST                        ${COPYCAT_HOST}
ENV COPYCAT_USERNAME                    ${COPYCAT_USERNAME}
ENV COPYCAT_PASSWORD                    ${COPYCAT_PASSWORD}
ENV EMAIL_USERNAME                      ${EMAIL_USERNAME}
ENV EMAIL_PASSWORD                      ${EMAIL_PASSWORD}
ENV GOOGLE_OAUTH_CLIENT_ID              ${GOOGLE_OAUTH_CLIENT_ID}
ENV GOOGLE_OAUTH_CLIENT_SECRET          ${GOOGLE_OAUTH_CLIENT_SECRET}
ENV GOOGLE_OAUTH_REDIRECT_URL_AGENT     ${GOOGLE_OAUTH_REDIRECT_URL_AGENT}
ENV GOOGLE_OAUTH_REDIRECT_URL_PICKUP    ${GOOGLE_OAUTH_REDIRECT_URL_PICKUP}
ENV GOOGLE_API_KEY                      ${GOOGLE_API_KEY}
ENV OMS_API_ID_KEY                      ${OMS_API_ID_KEY}
ENV AWS_KEY                             ${AWS_KEY}
ENV AWS_SECRET                          ${AWS_SECRET}
ENV AWS_BUCKET                          ${AWS_BUCKET}
ENV AWS_REGION                          ${AWS_REGION}
ENV AWS_VERSION                         ${AWS_VERSION}

ADD . /var/www/html/
RUN chmod 777 /var/www/html/assets/images

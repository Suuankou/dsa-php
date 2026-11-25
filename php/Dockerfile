FROM php:8.5.13-fpm-alpine

WORKDIR /var/www/html

# Install runtime dependencies only when needed.
RUN apk upgrade --no-cache

# Production PHP configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Security-related PHP settings
RUN { \
    echo "expose_php = Off"; \
    echo "display_errors = Off"; \
    echo "log_errors = On"; \
    echo "allow_url_include = Off"; \
    echo "cgi.fix_pathinfo = 0"; \
    echo "session.cookie_httponly = 1"; \
    echo "session.use_strict_mode = 1"; \
    echo "session.cookie_samesite = Lax"; \
    } > "$PHP_INI_DIR/conf.d/security.ini"

EXPOSE 9000

CMD ["php-fpm"]

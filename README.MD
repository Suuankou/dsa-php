# DSA PHP

Small PHP project for exploring data structures and algorithms in a custom MVC-style micro-framework. The app runs with Docker, Nginx, and PHP-FPM.

## Routes

| Route | Description |
| --- | --- |
| `/` | Home |
| `/fib` | Fibonacci sequence (iterative) |
| `/fib_rec` | Fibonacci sequence (recursive) |
| `/dsa_arrays` | Array traversal |
| `/bubble_sort` | Bubble sort |

## Requirements

- Docker Desktop, OrbStack, or another Docker environment with `docker compose`

## Run the project

```bash
git clone git@gitlab.com:shellwitch/dsa-php.git
cd dsa-php
docker compose up
```

The application is available at `http://localhost:80`.

## Service

| Service | URL |
| --- | --- |
| App | http://localhost:80 |

## Project structure

```text
app/
├── public/
│   ├── favicon.ico
│   ├── favicon-16x16.png
│   ├── favicon-32x32.png
│   └── index.php
├── controllers/
├── views/
│   ├── bubble_sort/
│   ├── dsa_arrays/
│   ├── fibonacci/
│   └── partials/
├── Core/
│   ├── Prints/
│   └── Sorting/
├── routes.php
└── config.php
nginx/
php/
docker-compose.yaml
```

## Useful commands

```bash
docker compose up -d
docker compose down
docker compose up -d --build
docker compose logs -f
docker compose exec app sh
```

## Stack

- Nginx
- PHP 8.5 FPM (Alpine)
- Docker Compose

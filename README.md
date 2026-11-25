# DSA PHP
!Currently being re-written and updated!
Small PHP project for exploring data structures and algorithms in a custom MVC-style micro-framework. More DSAs and visualizations will be implemented over time.
The app runs with Docker, Nginx, and PHP-FPM.

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
git clone git@gitlab.com:suuankou/dsa-php.git
cd dsa-php
docker compose up
```

The application is available at `http://localhost:80`.

## Useful commands

```bash
docker compose up -d
docker compose down
docker compose up -d --build
docker compose logs -f
docker compose exec app sh
```

## Plans
- Chartjs or own library for better DSA visualization
- Proper PHP refactor and cleanup, aswell as docker setup.

# TS-Laravel
This is a TypeScript and Laravel template project. It includes a pre-configured setup for building and deploying a Laravel application with TypeScript support.

This is just a dumb project to test out using TypeScript with Laravel and Bun, without the Vite or Vue templates, also running on Apache.

## Features
- TypeScript support for Laravel
- Tailwind CSS integration
- Easy build and watch scripts

# Requirements (created with)
- PHP = 8.2
- Composer = 2.8.12
- Bun = 1.3.0

## Installation
1. Clone the repository
2. Run `composer setup` to setup composer, bun dependencies and .env files.
3. Change .env values as needed.

## Usage
- Run `composer dev` to start the development server, with Typescript watch and hot-reloading. The PHP don't have hot-reloading, so you will need to refresh the browser on PHP changes.
- Run `bun run test` to run the TypeScript tests, if you hate yourself.
- Run `composer prod` to build for production and start the server, you might need to setup the environment variables in `.env.production` first. Also setup all your apache/nginx configs to point to the public folder. Good Luck!

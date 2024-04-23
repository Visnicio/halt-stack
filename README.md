# HALT Stack
- HTMX
- AlpineJS
- Laravel
- TailwindCSS

# Why?
Just because I hate dealing with bundler and web-servers

# How?
HTMX does not have any dependency
Alpine is importerd via
Laravel is php
Tailwind is using a CLI

# Basic usage
It's recommended to keep js and css files on public folder

"but... security?" bundlers compile to public folder.

To start tailwind

` sail npx tailwindcss -i ./resources/css/app.css -o ./resources/css/styles.css --watch `

Then import `{{asset('css/styles.css')}}` whenever you need

Same implies for javascript

Don't forget to refresh your page.

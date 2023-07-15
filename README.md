# WordPress Vite Theme

Generic WordPress Theme integrate with ViteJS. Motivated from [wp-theme-vite-tailwind](https://github.com/blonestar/wp-theme-vite-tailwind).

## Requirements

- PHP version >= 8.2
- NodeJS version >= 18

## Brief Setup

- You have been run WordPress with `wp server` or any other development runner like Laragon, Valet, et cetera. It will shows URL like `http://localhost:8080` or `wordpress-vite-theme.test` if you use Laragon or Valet.
- Clone this repository.
- Copy .env.example file to .env file. Change `VITE_SERVER` with the URL if necessary in case you have run another Vite based project in another terminal.
- Run `composer install`.
- Run `pnpm install` or `npm install`.
- Run `pnpm run dev` or `npm run dev`.

If you check Vite URL in will contain empty file. Because it serve as a runner for your assets such as CSS and JavaScript.

Just try edit `index.php`, save it! Check the browser without refresh the browser. Thanks to [vite-plugin-live-reload plugin](https://github.com/arnoson/vite-plugin-live-reload).

Wanna run assets in production mode? Just run `pnpm run build`.
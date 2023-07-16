# WordPress Vite Theme

Generic WordPress Theme integrate with ViteJS. Motivated from [wp-theme-vite-tailwind](https://github.com/blonestar/wp-theme-vite-tailwind).

## Requirements

- PHP version >= 8.2
- NodeJS version >= 18

## Brief Setup for Development Mode

- You already run WordPress project with `wp server` or any other development tools like Laragon or Valet. It will shows URL like `http://localhost:8080` if you use `wp server` or `wordpress-vite-theme.test` if you use Laragon or Valet.
- Go to `wp-content/themes` directory. Then download `wp-vite-theme` project with command below.

```bash
composer create-project kresnasatya/wp-vite-theme your-theme-name
```

- Go to your `your-theme-name` directory. Change `VITE_SERVER` in`.env` file with the another Vite URL in case you have run another Vite based project in another terminal.
- Run `composer install`.
- Run `pnpm install` or `npm install`.
- Run `pnpm run dev` or `npm run dev`.

If you check Vite URL in will contain empty file. Because it serve as a runner for your assets such as CSS and JavaScript.

Just try edit `index.php`, save it! Check the browser without refresh the browser. Thanks to [vite-plugin-live-reload plugin](https://github.com/arnoson/vite-plugin-live-reload).

## Brief Setup for Production Mode

- Stop `wp server` and `pnpm run dev` or `npm run dev`.
- Change the value of `VITE_ENV` in `.env` file from `development` to `production`.
- Run command `pnpm run build` or `npm run build`.
- Run `wp server` again.
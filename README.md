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

Just try edit `index.php` or any file with `.php` extension then save it! Vite will trigger full-reload event so browser reload the page automatically. Thanks to `handleHotUpdate` hook from Vite.

> [Cheatsheet](https://github.com/vinkla/wordplate/blob/master/vite.config.js).

### How to handling static assets in CSS and JS in WordPress + Vite Environment?

In production mode, static assets like images, fonts work well. BUT, not in development mode! In order to make it works, you need to set a symbolic link or symlink from source folder to destination folder. Here's the example.

```bash
# I store my images file in public directory
# I make a WordPress project called wpground.
# I make a WordPress theme called wp-vite-theme
# The ~ is a tilde symbol mean a "home" symbol in macOS. I don't know in another OS, sorry.

# Images
ln -s ~/wpground/wp-content/wp-vite-theme/public/images ~/wpground/images

# Fonts
ln -s ~/wpground/wp-content/wp-vite-theme/public/fonts ~/wpground/fonts
```

## Brief Setup for Production Mode

- Stop `wp server` and `pnpm run dev` or `npm run dev`.
- Change the value of `VITE_ENV` in `.env` file from `development` to `production`.
- Run command `pnpm run build` or `npm run build`.
- Run `wp server` again.

## Credits

- Photo by <a href="https://unsplash.com/@tom2185?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Tom Delanoue</a> on <a href="https://unsplash.com/photos/Cf4-4BZdim8?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
- Photo by <a href="https://unsplash.com/@mono_log?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">mono-log</a> on <a href="https://unsplash.com/photos/a-group-of-trees-reflected-in-a-body-of-water--HvOSe0s7Y8?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
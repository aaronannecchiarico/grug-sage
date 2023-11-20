/** @type {import('tailwindcss').Config} config */
import prelinePlugin from 'preline/plugin.js';
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}', 'node_modules/preline/dist/*.js',],
  theme: {
    extend: {
      colors: {}, // Extend Tailwind's default colors
    },
  },
  plugins: [
    prelinePlugin,
  ],
};

export default config;

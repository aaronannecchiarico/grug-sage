import domReady from '@roots/sage/client/dom-ready';
import 'preline';

/**
 * Application entrypoint
 */
domReady(async () => {
  console.log('Grugs up 🚀');
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);

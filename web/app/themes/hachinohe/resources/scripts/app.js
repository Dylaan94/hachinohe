import domReady from '@roots/sage/client/dom-ready';
import handleSwipers from './handlers/handleSwipers';

/**
 * Application entrypoint
 */

domReady(async () => {
  console.log('Hello, world!');

  handleSwipers();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);

import domReady from '@roots/sage/client/dom-ready';
import handleSwipers from './handlers/handleSwipers';
import handleAnchorTags from './handlers/handleAnchorTags';

/**
 * Application entrypoint
 */

domReady(async () => {
  handleSwipers();
  handleAnchorTags();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);

import domReady from '@roots/sage/client/dom-ready';
import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faRobot, faCodeBranch, faLock, faMoneyBill, faMagicWandSparkles } from '@fortawesome/free-solid-svg-icons';
import { faFacebook, faTwitter, faWordpressSimple } from "@fortawesome/free-brands-svg-icons";
import 'preline';

/**
 * Application entrypoint
 */
domReady(async () => {
  console.log('Grugs up 🚀');
  library.add(faRobot, faCodeBranch, faLock, faMoneyBill, faMagicWandSparkles);
  library.add(faFacebook, faTwitter, faWordpressSimple);
  dom.watch();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);

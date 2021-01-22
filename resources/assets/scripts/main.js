// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import templateInfo from './routes/templateInfo';
import templateTalleres from './routes/templateTalleres';
import templateApoyo from './routes/templateApoyo';
import single from './routes/single';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  templateInfo,
  templateTalleres,
  templateApoyo,
  single,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

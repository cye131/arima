

## ChangeLog
### [v1.3] 2018-07-02
- Added R integration
- Added matrix package
- Added toeliptz function in PHP
- Added PACF page
- Added PACF calculation with standard errors in PHP
- Added PACF graphing calculation and rendering
- Added PACF table
- Added nonzero significance highlighting on ACF and PACF graphs


### [v1.2] - 2018-06-29
- Added an auto-concatenation and minification system for JS files (/js in the root directory compiles to page-specific files in /public/static)
- Added storage of userData into the #ser-list virtual DOM
- Added ACF page
- Added ACF calculation with standard errors in PHP
- Added ACF graphing calculation and rendering
- Added Datatables integration
- Added Datatables exporting to CSV + Microsoft Excel
- Added Datatables styling to work with Bootstrap 4
- Added AJAX module templating
- Added automatic use of an overlay + spinner on AJAX calls
- Added automatic execution time logging on AJAX calls
- Added .active auto-selection on sidebar
- Added MathJAX (LaTeX) integration
- Added 404 information for Twig Loader Exceptions
- Added new HTML module graphprepend
- Improved Datatables sorting arrow CSS
- Improved virtual DOM storage by using .data attributes
- Improved favicon
- Improved Twig-related code in routing
- Removed recycled HTML code from correl project on Twig templates
- Removed /public/scripts, JS files now auto-compiled into /public/static
- Removed link to Datatables' jquery-ui css CDN



### [v1.1] - 2018-06-27
- Added data storage system in JSON
- Added cURL scraping system for stock and ETF tickers (imported from corr project)
- Added loading modal and spinner
- Added UI with modal-card framework
- Added new template for modal forms
- Added AJAX callbacks to update UI after successful data scraping
- Added ability to delete JSON storage
- Added UI for deletion
- Added datatables integration
- Added information sub-object to main JSON fail for each user
- Added graphs page
- Added graphs options for choosing which series to show and for y-axis comparison bases (% change vs base value)
- Added default AJAX callbacks for grabbing user JSON data
- Added better server-side sanitizing of AJAX variables
- Improved CSS styling on sidebar
- Improved JavaScript readability with better jQuery chaining
- Improved JavaScript readability by replacing .success() and .error() with .done(), .then(), and .fail() promises
- Improved JavaScript readability adding more IIFE functions for cleaner variable scoping
- Improved routerAjax.php with error message system
- Improved server-side models with return usage instead of exit
- Improved client-side form validation on adddata page
- Fixed checkboxes not working correctly on graphs page (used event listeners)
- Removed dataloader.html template

### [v1.0] - 2018-06-25
- Added intial upload
- Added basic PHP framework from corr project
- Added basic HTML/views templating framework from corr project
- Added basic CSS styling from corr project
- Added cookie system
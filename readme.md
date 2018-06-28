

## ChangeLog
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
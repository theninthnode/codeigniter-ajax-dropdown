README.txt

This download contains all the files necessary to get a complete working CodeIgniter application that contain a dropdown ajax filtering feature.

Important files:

- application > controllers > dropdown.php
  This is the default controller that loads the dropdown model and view files and contains method for getting sub options

- application > models > dropdown_model.php
  This is the dropdown model that interacts with the database for pulling options and suboptions

- application > view > dropdown > index.php
  This is the main view that contains the dropdown controls (selects)

- application > view > html > header.php
  Pulled into main view and loads all CSS and JS including CDN version of jQuery

- js > dropdown.js
  This is the main javascript file that performs the Ajax functions and loads JSON values into the select controls

- cidropdown.sql
  SQL file that will create and populate two tables, options and suboptions.

Credits:

 - Bootsrap CSS by twitter http://twitter.github.com/bootstrap/
 - jQuery - http://jquery.com/
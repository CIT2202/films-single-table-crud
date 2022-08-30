# Practical : PHP, PDO and Databases

# PHP, PDO and Databases

## Setting up
This practical is about using PHP to work with a MySQL database. We will work with the films database we created in the practical last week (this is the database with multiple tables - films, certificates, genres etc.). If you don't have this from last week, you can grab the  *films-db.sql* file from https://github.com/CIT2202/sql-joins/blob/master/films-db.sql.

Unless you are really confident with PHP, you will probably need to look at similar examples in order to complete the exercises. If you have a look at https://github.com/CIT2202/pdo-simple-crud. This contains very similar examples but using a *countries* table. Use these examples to help you complete the following exercises.

If you get really stuck, you can always switch to the *solutions* branch to see a complete solution.

## Making sense of the example
* In a code editor open *browseable-list.php*.
  * On line 3 change the connection settings to match the database name, username and password you created last week in the MySQL practical.
* If you open this same page in a browser, you should see a list of films that has been dynamically generated from the database.
* Now can you modify the code so that:
  * The page only shows films made in the 21st century i.e. in the year 2000 or later. 
  * In addition to the title of the film, the year of the film is also display.
  
## Creating a browseable list
* Use the examples in https://github.com/CIT2202/pdo-simple-crud, specifically https://github.com/CIT2202/pdo-simple-crud/blob/master/browseable-list.php and https://github.com/CIT2202/pdo-simple-crud/blob/master/details.php, to help you do the following:
  * Modify your *browseable-list.php* page so that each film is displayed as a hyperlink that links to a page named *details.php* (you will need to create a *details.php* page).
  * If you can get this to work, try and pass the selected film's id in the query string.
  * In *details.php* connect to your database and run a query that will display the full details for the selected film (the year and the duration of the film).


## Adding a new film
* In a code editor open *create.php*.
* Open this same page in a browser, you should see this is a simple form where users can enter the details of a new film. If you run the example you will get an error because the data is sent to a *save.php* page that we haven't created yet.
* Create the a new page called *save.php*. This should take the data from the form and run an SQL INSERT statement to add this data to the films table.  Again look at the similar examples in https://github.com/CIT2202/pdo-simple-crud to help you.

## Deleting films  (optional)
* In a code editor open *delete-list.php*.
  * Again on line 3 change the connection settings to match the database name, username and password you created last week in the MySQL practical.
* Open this same page in a browser. You should see a list of films. The user can select the films they want to delete. If you run the example you will get an error because the data is sent to a *delete.php* page that we haven't created yet.
* Create the a new page called *delete.php*. This should take the data from the form and run a series of SQL DELETE statements to delete a row from films table.

## Updating a film's details (optional)
* In a code editor open *edit-list.php*.
  * Again on line 3 change the connection settings to match the database name, username and password you created last week in the MySQL practical.
* Open this same page in a browser. You should see a list of films. The user can select the film they want to edit. If you submit this form you will be taken to a page called *edit.php*.
* Add some PHP code to *edit.php* that will take the id number of the selected film, run an SQL select statement to get the film's full details and populate the form with these details.
* When submitted the form data in *edit.php* is sent to a page called *update.php*. Create the a new page called *update.php*. This should take the data from the form and run an SQL UPDATE statement to update a row from the films table.

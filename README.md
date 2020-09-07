# Practical : PHP, PDO and Databases

# PHP, PDO and Databases

## Setting up
This practical is about using PHP to work with a MySQL database. We will work with the films tables we created in the practical last week. If you don't have these handy you can import the *films.sql* file from https://github.com/CIT2318/mysql-foreign-keys-joins/blob/master/films-db.sql.

Unless you are really confident with PHP, you will probably need to look at similar examples in order to complete the exercises. If you have a look at https://github.com/CIT2202/pdo-simple-crud. This contains very similar examples but using a *countries* table use these examples to help you complete the following exercises.

If you get really stuck, you can always switch to the *solutions* branch to see a complete solution.

## Creating a browseable list
* In a code editor open *browsable-list.php*.
* Open this same page in a browser, you should see a list of films that has been dynamically generated from the database.

* Modify your list.php page so that each film is displayed as a hyperlink that links to a page named *details.php* (you will need to create a *details.php* page).
* If you can get this to work, try and pass the specific film's id in the query string.
* In *details.php* connect to your database and run a query that will display the full details for the selected film (the certificate and the duration of the film).

## Adding a new film
* In a code editor open *create.php*.
* Open this same page in a browser, you should see this is a simple form where users can enter the details of a new film. If you run the example you will get an error because the data is sent to a *save.php* page that we haven't created yet.
* Create the a new page called *save.php*. This should take the data from the form and run an SQL INSERT statement to add this data to the films table.  

## Deleting films  (optional)
* In a code editor open *delete-list.php*.
* Open this same page in a browser. You should see a list of films. The user can select the films they want to delete. If you run the example you will get an error because the data is sent to a *delete.php* page that we haven't created yet.
* Create the a new page called *delete.php*. This should take the data from the form and run a series of SQL DELETE statements to delete row from films table.

## Updating a film's details (optional)
* In a code editor open *delete-list.php*.
* Open this same page in a browser. You should see a list of films. The user can select the film they want to edit. If you submit this form you will be taken to a page called *edit.php*.
* Add some PHP code to *edit.php* that will take the id number of the selected film, run an SQL select statement to get the film's full details and populate the form with these details.
* When submitted the form data in *edit.php* is sent to a page called *update.php*. Create the a new page called *update.php*. This should take the data from the form and run an SQL UPDATE statement to update a row from the films table.

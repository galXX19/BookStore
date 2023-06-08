# BookStore

Project Description: a bookstore using the Laravel framework allows:
- users to perform Create, Read, Update, and Delete operations on books stored in the API
- route to retrieve a list of all books
- a route to retrieve a specific book by its ID fields title and author
- filtering system to sort through the books by it's tags, some books have more than one tag
- be able to manage the book's tags (isbn number, year, title, publisher)

Tables:
- books: holds the title and author of the book

Models:
- book

Controllers:
- book: functions to create, store, edit, update, delete a book

To get started:
Open the files in vs code or any other laravel supported IDE.
Run php artisan migrate to create the books table.
Run php artisan db:seed to create dummy book data such as titles, authors, and tags.

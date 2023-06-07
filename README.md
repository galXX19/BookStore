# BookStore

Project Description: a RESTful API for a bookstore using the Laravel framework allows:
- users to perform Create, Read, Update, and Delete operations on books stored in the API
- route to retrieve a list of all books
- a route to retrieve a specific book by its ID fields title and author
- filtering system to sort through the books by it's tags, some books have more than one tag
- be able to manage the book's tags (isbn number, year, title, publisher)

Tables:
- publisher: holds the name and identifier of the publisher 
- books: holds the isbn, title, year, and publisher id of books
- authors: holds the name and identifier of the author
- book authors: hold the book id and the publisher id of a book

Models:
publisher, author, book, and book author.

Controllers:
- publisher: shows, creates, deletes, and edits an element
- 

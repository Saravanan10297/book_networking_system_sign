@extends('layouts.app')
@section('content')
    <h1>My Personal Book List</h1>

    <!-- Form to add a book to the personal list -->
    <form id="addBookForm" action="{{route('Books.storelist')}}"  method="POST">
      @csrf
        <label for="Bookname">Book Title:</label>
        <input type="text" name="Bookname"id="Bookname" required>
        <button type="submit">Add to Personal List</button>
    </form>

    <!-- Display the personal book list -->
    <h2>My Books</h2>
    <ul id="personalBookList">
        <!-- Personal book list items will be added here dynamically -->
    </ul>

    <script>
        // Function to add a book to the personal list (Frontend)
        function addToPersonalList() {
            var bookTitle = document.getElementById('bookslist').value;

            // Simple validation
            if (bookTitle.trim() === "") {
                alert("Please enter the book title.");
                return;
            }

            // Send the data to the backend (you will need AJAX for a real backend)
            // For this example, we just add the book to the frontend list
            addBookToFrontendList(bookTitle);

            // Optionally, you can clear the input field
            document.getElementById('bookslist').value = "";
        }

        // Function to add a book to the frontend list
        function addBookToFrontendList(bookTitle) {
            // Create a new list item
            var listItem = document.createElement('li');
            listItem.textContent = bookTitle;

            // Add the list item to the personal book list
            document.getElementById('personalBookList').appendChild(listItem);
        }
    </script>

@endsection

<!DOCTYPE html>
<html>
<head>
    <title>Library Management System</title>
    <script src="library.js"></script>
</head>
<body>
    <h1>Library Management System</h1>
    <button onclick="addBook()">Add Book</button>
    <button onclick="addDVD()">Add DVD</button>
    <button onclick="addStudent()">Add Student</button>
    <hr>
    <h2>Library Items:</h2>
    <div id="libraryItems"></div>
</body>
</html>
class LibraryItem {
    constructor(title, author, itemType) {
        this.title = title;
        this.author = author;
        this.itemType = itemType;
        this.isCheckedOut = false;
    }

    checkOut() {
        if (!this.isCheckedOut) {
            this.isCheckedOut = true;
            return true;
        }
        return false;
    }

    checkIn() {
        if (this.isCheckedOut) {
            this.isCheckedOut = false;
            return true;
        }
        return false;
    }
}

class Book extends LibraryItem {
    constructor(title, author, genre) {
        super(title, author, 'Book');
        this.genre = genre;
    }
}

class DVD extends LibraryItem {
    constructor(title, director, duration) {
        super(title, director, 'DVD');
        this.duration = duration;
    }
}

class Student {
    constructor(name, studentId) {
        this.name = name;
        this.studentId = studentId;
        this.checkedOutItems = [];
    }

    checkOutItem(item) {
        if (item.checkOut()) {
            this.checkedOutItems.push(item);
            return true;
        }
        return false;
    }

    checkInItem(item) {
        const index = this.checkedOutItems.indexOf(item);
        if (index !== -1) {
            this.checkedOutItems.splice(index, 1);
            item.checkIn();
            return true;
        }
        return false;
    }
}

const libraryItemsDiv = document.getElementById('libraryItems');
const library = [];

function addBook() {
    const book = new Book('The Great Gatsby', 'F. Scott Fitzgerald', 'Fiction');
    library.push(book);
    displayLibraryItems();
}

function addDVD() {
    const dvd = new DVD('Inception', 'Christopher Nolan', '2h 28m');
    library.push(dvd);
    displayLibraryItems();
}

function addStudent() {
    const student = new Student('Alice Johnson', 'S12345');
    displayLibraryItems();
}

function displayLibraryItems() {
    libraryItemsDiv.innerHTML = '<h2>Library Items:</h2>';
    library.forEach((item, index) => {
        libraryItemsDiv.innerHTML += `<p>${index + 1}. ${item.title} (${item.itemType})</p>`;
    });
}

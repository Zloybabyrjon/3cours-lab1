<?php

require_once "vendor/autoload.php";

use Egor\Lab1\Library;
use Egor\Lab1\Book;

$firstBook = new Book("Гарри Поттер", "Джона Роулинг", "1995", "Фентези");
$secondBook = new Book("Том Сойер", "Марк Твен", "1876", "Фикшн");
$thirdBook = new Book("Мертвы души", "Николай Гоголь", "1852", "Поэма");
$library = new Library();

$library->addBook($firstBook);
$library->addBook($secondBook);
$library->addBook($thirdBook);

$library->listAllBooks();

foreach ($library->findBooksByAuthor('Джона Роулинг') as $value) {
    print($value->getBookInfo());
}

print ('---------------------') . PHP_EOL;

$library->removeBookByTitle('Том Сойер');
$library->listAllBooks();

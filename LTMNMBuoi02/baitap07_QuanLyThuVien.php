<?php
interface Downloadable
{
    public function download();
}
class Book
{
    public $title;
    public $author;
    public $price;

    public function __construct($title, $author, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }
    public function hienThi()
    {
        echo "<h1>Quan ly Thu vien</h1>";
        echo "Tên sách: $this->title <br>";
        echo "Tác giả: $this->author <br>";
        echo "Giá: $this->price đồng <br>";
    }
}
class Ebook extends Book implements Downloadable
{
    public $fileSize;
    public function __construct($title, $author, $price, $fileSize)
    {
        parent::__construct($title, $author, $price);
        $this->fileSize = $fileSize;
    }
    public function download()
    {
        echo "Đang tải ebook...<br>";
    }
    public function hienThi()
    {
        parent::hienThi();
        echo "Dung lượng file: $this->fileSize MB <br>";
    }
}
$ebook = new Ebook(
    "Lap trinh PHP",
    "Nguyen Thi Minh Thu",
    150000,
    25
);
$ebook->hienThi();
$ebook->download();

?>
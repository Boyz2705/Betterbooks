<?php

namespace App\Models;

class BooksDetail
{
    static $details = [

        [
            "slug" => "1",
            "title" => "Simple way of piece life",
            "author" => "Armor Ramsey",
            "price" => "$ 40.00",
            "image" => "product-item1.jpg"
        ],
        [
            "slug" => "2",
            "title" => "Great travel at desert",
            "author" => "Sanchit Howdy",
            "price" => "$ 40.00",
            "image" => "product-item2.jpg"
        ],
        [
            "slug" => "3",
            "title" => "The lady beauty Scarlett",
            "author" => "Arthur Doyle",
            "price" => "$ 40.00",
            "image" => "product-item3.jpg"
        ],
        [
            "slug" => "4",
            "title" => "Once upon a time",
            "author" => "Klien Marry",
            "price" => "$ 40.00",
            "image" => "product-item4.jpg"
        ],
        [
            "slug" => "5",
            "title" => "Way of Happiness",
            "author" => "Ananda Kumar",
            "price" => "$ 40.00",
            "image" => "product-item5.jpg"
        ],
        [
            "slug" => "6",
            "title" => "Life of Seacrits",
            "author" => "Galista Marie",
            "price" => "$ 40.00",
            "image" => "product-item6.jpg"
        ],
    ];

    public static function all() {
        return collect(self::$details);
    }

    public static function find($slug) {
        $booksdetail = static::all();
        return $booksdetail->firstWhere('slug', $slug); 
    }
}

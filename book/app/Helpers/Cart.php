<?php
namespace App\Helpers;
class Cart{
    private $items =[];
    private $total_quantity = 0;
    private $total_price = 0;

    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
    }

    public function list(){
        return $this->items;
    }

    public function add($products,$quantity = 1){
        $item = [
            'book_title' => $products->title,
            'image' => $products->image,
            'price' => $products->price,
            'quantity' => $quantity
        ];
        $this->items[$products->id] = $item;
        session(['cart'=>$this->items]);
    }

    public function totalPrice(){
        $total_price = 0;
        foreach($this->items as $item){
            $total_price += $item['price'] * $item['quantity'];
        }

        return $total_price;
    }
    public function totalQuantity(){
        $total_quantity = 0;
        foreach($this->items as $item){
            $total_quantity += $item['quantity'];
        }

        return $total_quantity;
    }
}
<?php
    class Order
    {
        public function calculateTotalSum(){}
        public function getItems(){}
        public function getItemCount(){}
        public function addItem($itemOrder){}
        public function deleteItem($idItem){}   
    }
    
    class OrderManagement
    {
        public function load($idOrder){}
        public function save($order){}
        public function update($order){}
        public function delete($idOrder){}
    }
    
    class OrderView
    {
        public function printOrder($order){}
        public function showOrder($order){}        
    }

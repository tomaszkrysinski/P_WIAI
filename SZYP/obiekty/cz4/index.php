<?php
    class A{
    public function showA(){
      return "Funkcja z klasy A";
    }

    class B extends A{
      public function showB(){
        return "Funkcja z klasy B";
      }
    }
  }

  $objA = new A();
  echo $objA->showA();
  $objB = new B();
  echo $objB->showB();

 ?>

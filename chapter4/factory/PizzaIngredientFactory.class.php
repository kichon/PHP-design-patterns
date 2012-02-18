<?php

interface PizzaIngredientFactory {
    public function createDough();
    public function createSauce();
    public function createCheese();
    public function createVeggies();
    public function createPepperoni();
    public function createClam();
}

class NYPizzaIngredientFactory implements PizzaIngredientFactory {
    public function createDough() { return new ThinCrustDough(); }
    public function createSauce() { return new MarinaraSauce(); }
    public function createCheese() { return new ReggianoCheese(); }
    public function createVeggies() {
        $veggies = array(
                        new Garlic(),
                        new Onion(),
                        new Mushroom(),
                        new RedPepper(),
                    );
    }
    public function createPepperoni() { return new SlicedPepperoni(); }
    public function createClam() { return new FreshClams(); }
}

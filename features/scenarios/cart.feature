
Feature: Cart
  In order to purchase products from the website
  As a guest user
  I need to be able to add the products I want to purchase to a shopping cart

  Scenario: Adding a product to the cart
    Given the following products in the database:
    | id | name           | price | category | currency |
    | 1  | Flying Slipper | 12.30 | shoes    | gbp      |
    | 2  | Magic Wand     | 34.50 | magic    | gbp      |
    | 3  | Flying Saucer  | 100.50| extra    | gbp      |
    When I browse the "category/products" page
    And I should see all the products
    And I add product "Magic Wand" to my cart
    Then I should have product "Magic Wand" in my cart

  Scenario: Removing a product from the cart
  	Given the following products in the database:
    | id | name           | price | category | currency |
    | 1  | Flying Slipper | 12.30 | shoes    | gbp      |
    | 2  | Magic Wand     | 34.50 | magic    | gbp      |
    | 3  | Flying Saucer  | 100.50| extra    | gbp      |
    When I browse the "category/products" page
    And I add product "Flying Slipper" to my cart
    And I should have product "Flying Slipper" in my cart
    And I remove product "Flying Slipper" from my cart
    Then my cart should be empty

  Scenario: Empty cart message when cart is empty
  	Given the following products in the database:
    | id | name           | price | category | currency |
    | 1  | Flying Slipper | 12.30 | shoes    | gbp      |
    | 2  | Magic Wand     | 34.50 | magic    | gbp      |
    | 3  | Flying Saucer  | 100.50| extra    | gbp      |
    When I browse the "cart" page
    And my cart should be empty
    Then I should see a message stating that my cart is empty


  Scenario: Show cart totals
  	Given the following products in the database:
    | id | name           | price | category | currency |
    | 1  | Flying Slipper | 12.30 | shoes    | gbp      |
    | 2  | Magic Wand     | 34.50 | magic    | gbp      |
    | 3  | Flying Saucer  | 100.50| extra    | gbp      |
    When I browse the "category/products" page
    And I add product "Flying Saucer" to my cart
    And I add product "Flying Slipper" to my cart
    And I add product "Magic Wand" to my cart
    Then I should have 3 products in my cart
    And my cart total should be "147.30"

  @text
  Scenario: I want to see hello on the homepage
    Given I am on "homepage"
    When I visit "/"
    Then I want to see "hello"
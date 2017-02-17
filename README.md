# Word Counter
#### By Ash Laidlaw

## Goals

The goal of this project is to create a web app that will count the frequency of words a user enters. There will be two user inputs; the word or phrase that a user enters, and the word that a user wants to count.

## Languages Used

* HTML
* CSS
* Twig
* Silex
* PHP

## Specifications

| Spec | Input Word | Input Sentence | Output |
| ----- | ----- | ----- | ----- |
| 1: User enters a letter, and the app will output the number of times that letter occurs | "b" | "big" | 1 |
| 2: User enters a string of letters, and the app will output the number of times that the string occurs | "ed" | "he played well" | 1 |
| 3: User enters a word, and the app will output the number of times that the word will occur | "hey" | "hey hey hey" | 3 |
| 4: Form will require input from user | "" | "" | Form will ask user to fill out required fields |
| 5: Program is case insensitive | "how" | "hello, HOW are you?" | 1 |

## Setup instructions

1. Clone this repository from the URL: (https://github.com/Yhbv24/php-project-2).
2. Download the required dependencies (Twig, Silex, and PHPUnit) using Composer.
   * To use Composer, please follow the instructions here: (https://getcomposer.org/)
   * Once Composer is installed, run "composer install" in the Terminal after adding the required dependencies.
3. Once the project has been cloned and the dependencies installed, run "php -S localhost:8000" in the Terminal from the web directory of the project.
4. Open your browser and type in "localhost:8000".

## Known Bugs

Not a bug, but not all specs pass. Project instructions were not interpreted correctly by me, so the first two specs will fail tests at this point. The primary spec that needs to work is spec 3, which works as intended.

## Licensing

MIT License

## Copyright

© Ash Laidlaw 2017

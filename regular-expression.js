let sentence = "The  dog chased the cat";
let regx = /the/;

let myString = "Hello, World";
let myRegEx = /Hello/;

let result = myRegEx.test(myString); // Which will return TRUE;

let waldoIsHiding = "Somewhere Waldo is hiding in this text.";
let waldoRegex = /Waldo/;
let result = waldoRegex.test(waldoIsHiding); // return TRUE with 'W' - of capital letter

let petString = "James has a pet cat.";
let petRegex = /dog|cat|bird|fish/; // Adding or condition with multiple choices
let result = petRegex.test(petString);

let myString = "freeCodeCamp";
let fccRegex = /freecodecamp/i; // Adding case sensitive condition from i
let result = fccRegex.test(myString);

let extractStr = "Extract the word 'coding' from this string.";
let codingRegex = /coding/;
let result = extractStr.match(codingRegex); // Extract word from a sentence

console.log(result);

let testStr = "Repeat, Repeat, Repeat";
let ourRegex = /Repeat/g;
testStr.match(ourRegex);

let twinkleStar = "Twinkle, twinkle, little star";
let starRegex = /twinkle/ig; // Adding g flag for match all words
let result = twinkleStar.match(starRegex);

console.log(result);


let humStr = "I'll hum a song";
let hugStr = "Bear hug";
let huRegex = /hu./;
humStr.match(huRegex); // Returns ["hum"]
hugStr.match(huRegex); // Returns ["hug"]

let exampleStr = "Let's have fun with regular expressions!";
let unRegex = /.un/;
let result = unRegex.test(exampleStr);

console.log(result);

let bgRegex = /b[aiu]g/;

let quoteSample = "Beware of bugs in the above code; I have only proved it correct, not tried it.";
let vowelRegex = /[aeiou]/ig;
let result = quoteSample.match(vowelRegex);

console.log(result);

let quoteSample = "The quick brown fox jumps over the lazy dog.";
let alphabetRegex = /[a-z]/ig;
let result = quoteSample.match(alphabetRegex);

console.log(result);

let quoteSample = "Blueberry 3.141592653s are delicious.";
let myRegex = /[2-6h-s]/ig;
let result = quoteSample.match(myRegex);

console.log(result);

// Security gaurde
// Check queue of people, if person is older than 18 and younger than 35, admit. Otherwise, appologize.

// write variables to contain the limitations of the age.
const minAge = 18;
const maxAge = 35;

// we will loop through the queue.


do {
    let age = prompt("Please enter your age");
  // if current person is younger than 18, will print (you are too young)
  if ( age < minAge){
    alert( "you are too young");
  }
  // if older than 35, will print (you are too old)
  else if ( age > maxAge){
    alert ("you are too old");
  }
  // if between 18 and 35, ask for the user name, and welcome the user by his/her name.
  else {
    let name = prompt( "what is your name")
    alert( "welcome "+ name + " to the party");
  }
} while (confirm("Is there anyone else?"));

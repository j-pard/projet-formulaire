
<<<<<<< HEAD
    // //Get the button:
    // mybutton = document.getElementById("myBtn");

    // // When the user scrolls down 20px from the top of the document, show the button
    // window.onscroll = function() {scrollFunction()};
    
    // function scrollFunction() {
    //   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    //     mybutton.style.display = "block";
    //   } else {
    //     mybutton.style.display = "none";
    //   }
    // }
    
    // // When the user clicks on the button, scroll to the top of the document
    // function topFunction() {
    //   document.body.scrollTop = 0; // For Safari
    //   document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    // }
=======
const inputs = [
      submit = document.getElementById("submit"),
      gender = document.getElementById("gender"),
      nationality = document.getElementById("nationality"),
      lastname = document.getElementById("lastname"),
      firstname = document.getElementById("firstname"),
      email = document.getElementById("email"),
      subject = document.getElementById("subject"),
      message = document.getElementById("message"),
      copy = document.getElementById("copy")
]

let values = [
      gender.value,
      nationality.value,
      lastname.value,
      firstname.value,
      email.value,
      subject.value,
      message.value,
]

const baseBorderColor = "rgb(169, 169, 169)";

// FUNCTIONs ----------

const checkInput = (input) => {
      values = [
            gender.value,
            nationality.value,
            lastname.value,
            firstname.value,
            email.value,
            subject.value,
            message.value,
      ]

      if(values.every(value => value != "")) {
            submit.removeAttribute("disabled");
      }
      else {
            submit.setAttribute("disabled", true);
      }
}

// RUNNING ----------

inputs.forEach(input => {
      input.addEventListener("keyup", () => {
            checkInput(input);
      });
      input.addEventListener("change", () => {
            checkInput(input);
      });
});

>>>>>>> form

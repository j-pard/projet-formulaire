
const inputs = [
      submit = document.getElementById("submit"),
      gender = document.getElementById("gender"),
      nationality = document.getElementById("nationality"),
      lastname = document.getElementById("lastname"),
      firstname = document.getElementById("firstname"),
      email = document.getElementById("email"),
      subject = document.getElementById("subject"),
      message = document.getElementById("message"),
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

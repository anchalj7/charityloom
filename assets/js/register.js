const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = () => {
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
};
loginBtn.onclick = () => {
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
};
signupLink.onclick = () => {
  signupBtn.click();
  return false;
};
document.addEventListener("DOMContentLoaded", function () {
  const loginForm = document.querySelector("form.login");
  const signupForm = document.querySelector("form.signup");

  loginForm.addEventListener("submit", function (e) {
    const email = loginForm.email.value.trim();
    // const password = loginForm.password.value.trim();

    if (!validateEmail(email)) {
      alert("Please enter a valid email address.");
      e.preventDefault();
      return false;
    }

    // if (password.length < 6) {
    //   alert("Password must be at least 6 characters long.");
    //   e.preventDefault();
    //   return false;
    // }
  });

  signupForm.addEventListener("submit", function (e) {
    const name = signupForm.name.value.trim();
    const email = signupForm.email.value.trim();
    const password = signupForm.password.value.trim();
    const contact = signupForm.contact.value.trim();
    const address = signupForm.address.value.trim();

    if (
      name === "" ||
      email === "" ||
      password === "" ||
      contact === "" ||
      address === ""
    ) {
      alert("All fields are required.");
      e.preventDefault();
      return false;
    }

    if (!validateEmail(email)) {
      alert("Please enter a valid email address.");
      e.preventDefault();
      return false;
    }

    if (password.length < 6) {
      alert("Password must be at least 6 characters long.");
      e.preventDefault();
      return false;
    }

    if (isNaN(contact) || contact.length < 10) {
      alert("Please enter a valid contact number.");
      e.preventDefault();
      return false;
    }
  });

  function validateEmail(email) {
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return emailPattern.test(email);
  }
});

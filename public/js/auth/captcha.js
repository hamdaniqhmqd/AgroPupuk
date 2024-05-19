// Selecting necessary DOM elements
const captchaTextBox = document.querySelector(".captch_box input");
const refreshButton = document.querySelector(".refresh_button");
const captchaInputBox = document.querySelector(".captch_input input");
const submitButton = document.querySelector(".button .disabled");

// Variable to store generated captcha
let captchaText = null;

// Function to generate captcha
const generateCaptcha = () => {
    const randomString = Math.random().toString(36).substring(2, 10);
    const randomStringArray = randomString.split("");
    const changeString = randomStringArray.map((char) =>
        Math.random() > 0.5 ? char.toUpperCase() : char
    );
    captchaText = changeString.join("");
    captchaTextBox.value = captchaText;
    console.log(captchaText);
};

const refreshBtnClick = () => {
    generateCaptcha();
    captchaInputBox.value = "";
    captchaKeyUpValidate();
};

const captchaKeyUpValidate = () => {
    //Toggle submit button disable class based on captcha input field.
    submitButton.classList.toggle("disabled", !captchaInputBox.value);

    if (!captchaInputBox.value) message.classList.remove("active");
};

// Add event listeners for the refresh button, captchaInputBox, submit button
refreshButton.addEventListener("click", refreshBtnClick);
captchaInputBox.addEventListener("keyup", captchaKeyUpValidate);

// Generate a captcha when the page loads
generateCaptcha();

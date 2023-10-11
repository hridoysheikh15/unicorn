document.getElementById("submitBtn").addEventListener("click", function () {
    // Get the form data
    var formData = new FormData(document.getElementById("contactForm"));
    console.log(formData);
    // Send the data to a server-side script
    fetch("sent_email.php", {
        method: "POST",
        body: formData
    })
    .then(response => {
        console.log(response);
        if (response.ok) {
            alert("Email sent successfully!");
        } else {
            alert("Email sending failed. Please try again later.");
        }
    })
    .catch(error => {
        console.error("Error:", error);
        alert("An error occurred. Please try again later.");
    });
});









// const form = document.getElementById("contactForm");

// form.addEventListener("submit", submit_fun);

// function submit_fun() {
// // let fname = document.getElementById("fname").value,
// //     lname = document.getElementById("lname").value,
// //     email = document.getElementById("email").value,
// //     mobile = document.getElementById("mobile").value,
// //     country = document.getElementById("country").value,
// //     subject = document.getElementById("subject").value,
// //     comment = document.getElementById("comment").value;
// //   console.log(fname);
// //   console.log(lname);
// //   console.log(email);
// //   console.log(mobile);
// //   console.log(country);
// //   console.log(subject);
// //   console.log(comment);

// // Send the data to a server-side script
// fetch("sent_email.php", {
//     method: "POST",
//     body: formData
// })
// .then(response => {
//     if (response.ok) {
//         alert("Email sent successfully!");
//     } else {
//         alert("Email sending failed. Please try again later.");
//     }
// })
// .catch(error => {
//     console.error("Error:", error);
//     alert("An error occurred. Please try again later.");
// });
// }

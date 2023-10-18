(function () {
  // https://dashboard.emailjs.com/admin/account
  emailjs.init("sZisWYCxwR8T5tVkJ");
})();

window.onload = function () {
  document
    .getElementById("contact-form")
    .addEventListener("submit", function (event) {
      event.preventDefault();
      // generate a five digit number for the contact_number variable
      // this.contact_number.value = Math.random() * 100000 | 0;

      let username = String(document.getElementById("name").value +" " +document.getElementById("lname").value);
      let email = String(document.getElementById("email").value);
      let contact = String(document.getElementById("mobile").value);
      let sub = String(document.getElementById("subject").value);
      let comment = String(document.getElementById("comment").value);

      var emailBody = {
        from_name: username,
        email: email,
        contact: contact,
        sub: sub,
        message:comment
      };

      emailjs.send("ussbd_mail_service_1234u", "template_0p1n8we", emailBody)
        .then(
          function (response) {
            // console.log('SUCCESS!', response.status, response.text);
            $(".mail-success-report").css({
              display: "block",
              opacity: "1",
              transition: "1s all ease-in",
            });
          },
          function (error) {
            // console.log("FAILED...", error);
            $(".mail-success-report").css({
                display: "block",
                opacity: "1",
                transition: "1s all ease-in",
              });
          }
        )
        .catch((error) => {
            // console.log(`ERROR: ${error}`);
            $(".mail-success-report").css({
                display: "block",
                opacity: "1",
                transition: "1s all ease-in",
              });
        });

      document.getElementById("contact-form").reset();
    });
};

// document.addEventListener("DOMContentLoaded", function () {
//     document
//         .getElementById("contactForm")
//         .addEventListener("submit", function (event) {
//             event.preventDefault(); // Prevent the default form submission

//             // Get the form data
//             const contact = new FormData(this);

//             // Send the form data to the server using Fetch API
//             fetch("contact", {
//                 method: "POST",
//                 body: contact,
//             })
//                 .then((response) => {
//                     if (!response.ok) {
//                         throw new Error("Network response was not ok");
//                     }
//                     // Handle successful response
//                     return response.json();
//                 })
//                 .then((data) => {
//                     // Display success message using SweetAlert2
//                     Swal.fire({
//                         title: "Great!",
//                         text: "Your message has been delivered",
//                         icon: "success",
//                     });

//                     // Reset the form
//                     document.getElementById("contactForm").reset();
//                 })
//                 .catch((error) => {
//                     // Handle errors
//                     console.error("Error:", error);
//                     // Display error message using SweetAlert2
//                     Swal.fire({
//                         title: "Error!",
//                         text: "An error occurred while submitting the form",
//                         icon: "error",
//                     });
//                 });
//         });
// });
// document.addEventListener("DOMContentLoaded", function () {
//     document
//         .getElementById("form")
//         .addEventListener("save", function (event) {
//             event.preventDefault(); // Prevent the default form submission

//             // Get the form data
//             const contact = new FormData(this);

//             // Send the form data to the server using Fetch API
//             fetch("review", {
//                 method: "POST",
//                 body: contact,
//             })
//                 .then((response) => {
//                     if (!response.ok) {
//                         throw new Error("Network response was not ok");
//                     }
//                     // Handle successful response
//                     return response.json();
//                 })
//                 .then((data) => {
//                     // Display success message using SweetAlert2
//                     Swal.fire({
//                         title: "Great!",
//                         text: "Your message has been delivered",
//                         icon: "success",
//                     });

//                     // Reset the form
//                     document.getElementById("contactForm").reset();
//                 })
//                 .catch((error) => {
//                     // Handle errors
//                     console.error("Error:", error);
//                     // Display error message using SweetAlert2
//                     Swal.fire({
//                         title: "Error!",
//                         text: "An error occurred while submitting the form",
//                         icon: "error",
//                     });
//                 });
//         });
// });

// A $( document ).ready() block.
// $( document ).ready(function() {

//     $("reviewForm").click(function () {
//         alert("The paragraph was clicked.");
//     });
// });
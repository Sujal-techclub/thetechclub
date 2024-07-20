/*const scriptURL = "https://script.google.com/macros/s/AKfycbzTuJvCDHszWy2OdtaHkcjTvyZaXET_od7fU61zYIb6eqUvd1pmC3xwtn6nCIN2th4Q-A/exec"

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
	e.preventDefault()
	fetch(scriptURL, { method: 'POST', body: new FormData(form)})
	.then(response => alert("Thank you! Your form is successfully submitted."))
	.then(() => {window.location.reload(); })
	.catch(error => console.error('Error!', error.message))
})*/

const scriptURL = "https://script.google.com/macros/s/AKfycbzTuJvCDHszWy2OdtaHkcjTvyZaXET_od7fU61zYIb6eqUvd1pmC3xwtn6nCIN2th4Q-A/exec";

const form = document.forms['contact-form'];

form.addEventListener('submit', e => {
  e.preventDefault();
  fetch(scriptURL, { method: 'POST', body: new FormData(form) })
    .then(response => {
      if (response.ok) {
        alert("Thank you! Your form is successfully submitted.");
        form.reset(); // Add this line to reset the form
        window.location.reload();
      } else {
        throw new Error(`Error submitting form: ${response.status} ${response.statusText}`);
      }
    })
    .catch(error => {
      console.error('Error submitting form:', error);
      alert("Error submitting form. Please try again later.");
    });
});
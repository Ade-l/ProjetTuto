function checkForm() {
  let mail = document.getElementById("inputMail");
  let name = document.getElementById("inputName");
  let firstname = document.getElementById("inputFirstName");
  let text = document.getElementById("inputTextarea");
  let result = document.getElementById("resuclt");
  if (mail.value.length < 1 || name.value.length < 1 || text.value.length < 1) {
    mail.style.border = "2px solid var(--danger)";
    return;
  }
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "contact_request.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      let resp = JSON.parse(xhr.response);
      if (!resp["error"]) {
        if (resp["status"] === "success") {
          name.value = "";
          name.disabled = true;
          firstname.value = "";
          firstname.disabled = true;
          mail.value = "";
          mail.disabled = true;
          text.value = "";
          text.disabled = true;
          text.placeholder =
            "Veuillez patientez une minute pour pouvoir ré-écrire!";
          result.hidden = false;
          result.className = "alert alert-success";
          result.innerText = resp["success"];
          setTimeout(() => {
            text.disabled = false;
            name.disabled = false;
            mail.disabled = false;
            firstname.disabled = false;
            text.placeholder = "Insérez ici votre text!";
          }, 1000 * 60);
        }
      } else {
        result.hidden = false;
        result.className = "alert alert-danger";
        result.innerText = resp["error"];
        firstname.style.color = "var(--danger)";
        text.style.color = "var(--danger)";
        name.style.color = "var(--danger)";
        mail.style.color = "var(--danger)";
      }
    }
  };
  xhr.send(
    "lastname=" +
      name.value +
      "&firstname=" +
      firstname.value +
      "&mail=" +
      mail.value +
      "&text=" +
      text.value
  );
}

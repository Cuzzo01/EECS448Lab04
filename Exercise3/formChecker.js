function validateForm() {
  let user = document.forms['overallForm']['username'].value;
  let pass = document.forms['overallForm']['password'].value;
  let cokeNum = document.forms['overallForm']['cokeNum'].value;
  let drpepperNum = document.forms['overallForm']['drpepperNum'].value;
  let mexicanCokeNum = document.forms['overallForm']['mexicanCokeNum'].value;
  let shipping = document.forms['overallForm']['shipping'].value;

  console.log("checking form")

  if (shipping == ""
    || pass == ""
    || cokeNum == ""
    || drpepperNum == ""
    || mexicanCokeNum == ""
    || cokeNum < 0
    || drpepperNum < 0
    || mexicanCokeNum < 0) {
      alert("There is a problem with your input. Check all input is within bounds and formatted correctly.");
      return false;
    }

  // Validate email is an email address
  console.log("checks passed")
  return true;
}

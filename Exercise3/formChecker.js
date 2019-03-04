function validateForm() {
  let user = document.forms['overallForm']['username'].value;
  let pass = document.forms['overallForm']['password'].value;
  let cokeNum = document.forms['overallForm']['cokeNum'].value;
  let drpepperNum = document.forms['overallForm']['drpepperNum'].value;
  let mexicanCokeNum = document.forms['overallForm']['mexicanCokeNum'].value;
  let shipping = document.forms['overallForm']['shipping'].value;

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

  // States: (what is bring read through)
  // 0: name before @
  // 1: domain directly after @ (cannot be a TLD)
  // 2: any domain after first (coule be TLD or subdomain)
  let state = 0;
  let buffer = "";
  for (var i = 0; i < user.length; i++) {
    let currentChar = user.charAt(i);
    if (currentChar == '@' && state = 0) {
      if (buffer.length > 0) {
        state = 1;
        buffer = "";
      } else {
        // no name before @ sign
        return false;
      }
    } else if (currentChar == '.' && state == 1) {
      if (buffer.length < 1) {
        // no domain before period
        return false;
      } else {
        state = 2;
      }
      buffer = "";
    } else {
      buffer += currentChar;
    }
  }
  if (buffer.length < 1 || state != 2) {
    // no domain after final '.' or didnt make through all states
    return false;
  }
  return true;
}

function validate(value1, value2) {
  if (parseInt(value1) > parseInt(value2)) {
    alert("Minimum value must be less than or equal to maximum value.");
    return false;
  }

  return true;
}

function onChangeInput() {
  const min = document.getElementById("min").value;
  const max = document.getElementById("max").value;
  return validate(min, max);
}

addEventListener("change", onChangeInput);

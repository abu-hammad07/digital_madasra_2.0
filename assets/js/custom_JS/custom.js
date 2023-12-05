

// required for urdu 
document.getElementById('submit').addEventListener('click', function () {

  var stdNameInput = document.getElementsByName('std_name')[0].value;
  var stdFatherNameInput = document.getElementsByName('std_father_name')[0].value;
  var stdBirthPlaceInput = document.getElementsByName('std_birth_place')[0].value;
  var stdAddressInput = document.getElementsByName('std_address')[0].value;

  var guarNameInput = document.getElementsByName('guar_name')[0].value;
  var guarRelationInput = document.getElementsByName('guar_relation')[0].value;
  var guarAddressInput = document.getElementsByName('guar_address')[0].value;

  var preSchoolInput = document.getElementsByName('pre_school')[0].value;
  var preClassInput = document.getElementsByName('pre_class')[0].value;
  var nextClassInput = document.getElementsByName('next_class')[0].value;

  // Regular expression to match Urdu characters
  var urduRegex = /[\u0600-\u06FF]/;

  // if (!urduRegex.test(preSchoolInput) || !urduRegex.test(preClassInput) || !urduRegex.test(nextClassInput) ||
  //   !urduRegex.test(stdNameInput) || !urduRegex.test(stdFatherNameInput) || !urduRegex.test(stdBirthPlaceInput) || !urduRegex.test(stdAddressInput) ||
  //   !urduRegex.test(guarNameInput) || !urduRegex.test(guarRelationInput) || !urduRegex.test(guarAddressInput)) {
  //   alert('Please only type in Urdu.');
  //   return;
  // }



  if (!urduRegex.test(stdNameInput)) {
    document.getElementById('std-name-err').innerText = 'اردو میں لیکھے ';
    return;
  } else {
    document.getElementById('std-name-err').innerText = '';
  }
  if (!urduRegex.test(stdFatherNameInput)) {
    document.getElementById('std-father-err').innerText = 'اردو میں لیکھے ';
    return;
  } else {
    document.getElementById('std-father-err').innerText = '';
  }
  if (!urduRegex.test(stdBirthPlaceInput)) {
    document.getElementById('std-birth-err').innerText = 'اردو میں لیکھے ';
    return;
  } else {
    document.getElementById('std-birth-err').innerText = '';
  }
  if (!urduRegex.test(stdAddressInput)) {
    document.getElementById('std-address-err').innerText = 'اردو میں لیکھے ';
    return;
  } else {
    document.getElementById('std-address-err').innerText = '';
  }


  if (!urduRegex.test(guarNameInput)) {
    document.getElementById('guar-name-err').innerText = 'اردو میں لیکھے ';
    return;
  } else {
    document.getElementById('guar-name-err').innerText = '';
  }
  if (!urduRegex.test(guarRelationInput)) {
    document.getElementById('guar-relation-err').innerText = 'اردو میں لیکھے ';
    return;
  } else {
    document.getElementById('guar-relation-err').innerText = '';
  }
  if (!urduRegex.test(guarAddressInput)) {
    document.getElementById('guar-address-err').innerText = 'اردو میں لیکھے ';
    return;
  } else {
    document.getElementById('guar-address-err').innerText = '';
  }


  if (!urduRegex.test(preSchoolInput)) {
    document.getElementById('pre-school-err').innerText = 'اردو میں لیکھے ';
    return;
  } else {
    document.getElementById('pre-school-err').innerText = '';
  }
  if (!urduRegex.test(preClassInput)) {
    document.getElementById('pre-class-err').innerText = 'اردو میں لیکھے ';
    return;
  } else {
    document.getElementById('pre-class-err').innerText = '';
  }
  if (!urduRegex.test(nextClassInput)) {
    document.getElementById('next-class-err').innerText = 'اردو میں لیکھے ';
    return;
  } 
  else {
    document.getElementById('next-class-err').innerText = '';
  }


});






// // Event listener for the submit button
// document.getElementById('submit').addEventListener('click', function () {

//   // Get input values from the form
//   var stdNameInput = document.getElementsByName('std_name')[0].value;
//   var stdFatherNameInput = document.getElementsByName('std_father_name')[0].value;
//   var stdBirthPlaceInput = document.getElementsByName('std_birth_place')[0].value;
//   var stdAddressInput = document.getElementsByName('std_address')[0].value;

//   var guarNameInput = document.getElementsByName('guar_name')[0].value;
//   var guarRelationInput = document.getElementsByName('guar_relation')[0].value;
//   var guarAddressInput = document.getElementsByName('guar_address')[0].value;

//   var preSchoolInput = document.getElementsByName('pre_school')[0].value;
//   var preClassInput = document.getElementsByName('pre_class')[0].value;
//   var nextClassInput = document.getElementsByName('next_class')[0].value;

//   // Regular expression to match Urdu characters
//   var urduRegex = /[\u0600-\u06FF]/;

//   // Check if the preSchoolInput contains Urdu characters
//   if (!urduRegex.test(preSchoolInput)) {
//     // Display error message for pre-school input
//     document.getElementById('pre-school-err').innerText = 'Please enter in Urdu';
//     return;
//   } else {
//     // Clear the error message if input is valid
//     document.getElementById('pre-school-err').innerText = '';
//   }

//   // Check if the preSchoolInput contains Urdu characters
//   if (!urduRegex.test(preSchoolInput)) {
//     // Display error message for pre-school input
//     document.getElementById('pre-school-err').innerText = 'Please enter in Urdu';
//     return;
//   } else {
//     // Clear the error message if input is valid
//     document.getElementById('pre-school-err').innerText = '';
//   }

//   // Check if the preSchoolInput contains Urdu characters
//   if (!urduRegex.test(preSchoolInput)) {
//     // Display error message for pre-school input
//     document.getElementById('pre-school-err').innerText = 'Please enter in Urdu';
//     return;
//   } else {
//     // Clear the error message if input is valid
//     document.getElementById('pre-school-err').innerText = '';
//   }

//   // Check if the preSchoolInput contains Urdu characters
//   if (!urduRegex.test(preSchoolInput)) {
//     // Display error message for pre-school input
//     document.getElementById('pre-school-err').innerText = 'Please enter in Urdu';
//     return;
//   } else {
//     // Clear the error message if input is valid
//     document.getElementById('pre-school-err').innerText = '';
//   }

//   // Check if the preSchoolInput contains Urdu characters
//   if (!urduRegex.test(preSchoolInput)) {
//     // Display error message for pre-school input
//     document.getElementById('pre-school-err').innerText = 'Please enter in Urdu';
//     return;
//   } else {
//     // Clear the error message if input is valid
//     document.getElementById('pre-school-err').innerText = '';
//   }

//   // Check if the preSchoolInput contains Urdu characters
//   if (!urduRegex.test(preSchoolInput)) {
//     // Display error message for pre-school input
//     document.getElementById('pre-school-err').innerText = 'Please enter in Urdu';
//     return;
//   } else {
//     // Clear the error message if input is valid
//     document.getElementById('pre-school-err').innerText = '';
//   }

//   // Check if the preSchoolInput contains Urdu characters
//   if (!urduRegex.test(preSchoolInput)) {
//     // Display error message for pre-school input
//     document.getElementById('pre-school-err').innerText = 'Please enter in Urdu';
//     return;
//   } else {
//     // Clear the error message if input is valid
//     document.getElementById('pre-school-err').innerText = '';
//   }

//   // Check if the preSchoolInput contains Urdu characters
//   if (!urduRegex.test(preSchoolInput)) {
//     // Display error message for pre-school input
//     document.getElementById('pre-school-err').innerText = 'Please enter in Urdu';
//     return;
//   } else {
//     // Clear the error message if input is valid
//     document.getElementById('pre-school-err').innerText = '';
//   }

//   // Check if the preSchoolInput contains Urdu characters
//   if (!urduRegex.test(preSchoolInput)) {
//     // Display error message for pre-school input
//     document.getElementById('pre-school-err').innerText = 'Please enter in Urdu';
//     return;
//   } else {
//     // Clear the error message if input is valid
//     document.getElementById('pre-school-err').innerText = '';
//   }

//   // Check if the preSchoolInput contains Urdu characters
//   if (!urduRegex.test(preSchoolInput)) {
//     // Display error message for pre-school input
//     document.getElementById('pre-school-err').innerText = 'Please enter in Urdu';
//     return;
//   } else {
//     // Clear the error message if input is valid
//     document.getElementById('pre-school-err').innerText = '';
//   }

//   // Additional validation and processing can be added here

//   // Further processing logic or form submission can be added here

// });





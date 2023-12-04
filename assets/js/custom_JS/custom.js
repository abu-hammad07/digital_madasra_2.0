document.getElementById('submit').addEventListener('click', function() {
    var preSchoolInput = document.getElementsByName('pre_school')[0].value;
    var preClassInput = document.getElementsByName('pre_class')[0].value;
    var nextClassInput = document.getElementsByName('next_class')[0].value;

    // Regular expression to match Urdu characters
    var urduRegex = /[\u0600-\u06FF]/;

    if (!urduRegex.test(preSchoolInput) || !urduRegex.test(preClassInput) || !urduRegex.test(nextClassInput)) {
      alert('Please only type in Urdu.');
      return;
    }

    // If all inputs are in Urdu, you can proceed with form submission or other actions.
    // Add your code here.

  });
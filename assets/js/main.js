$.ajax({
  url: 'https://api.ssactivewear.com/V2/products',
  type: 'GET',
  username: '93793',
  password: '4c6b5573-1b21-4369-a1b7-799e484dab13',
  dataType: 'json',
  success: function (data) {
    alert('Okay, shit worked');
  }
});

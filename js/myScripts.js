$(function(ready){
  $(".cows").change(function(){
    let request = "getRequest";
    let name = $(".cows").val();
    let url = "./classes/CowController.php?request=" + request + "&name=" + name;

    fetch(url, {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json',
      },
    })
    .then((response) => response.json())
    .then((response) => {
		console.log('Success:', response);
		$(".image-section img").attr('src',"./" + response.imagePath);
		$(".details-section p").html("").html(response.details);
    })
    .catch((error) => {
      console.error('Error:', error);
    });

    return false;
  });
});
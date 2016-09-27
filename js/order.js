
$(document).ready(function(){
  var total = 0;
	var items = new Array();
	var prices = new Array();

  // Add the button to checkout list
  $("a.btn.btn-info").click(function(){
    // Get the name and the price of the item
    var product =  $(this).siblings('p.product').text();
    var price   =  parseInt($(this).siblings('p').children('span.price').text());

    // Store the data in a globa variable
    items.push(name);
    prices.push(price);
    total += price;

    // Add the item to the sidebar
    var output = '<tr><td>'+product+'</td><td>'+price+'.00</td></tr>';
    $("#checkout tbody").append(output);
    $("span.checkout__total").text("Php " + total + ".00");
  });


  // Add the checkout items to the order list
    $("checkout__option.buy").click(function(){

    });
});

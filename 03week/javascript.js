// filterSelection("all") // Execute the function and show all columns
// function filterSelection(c) {
//   var x, i;
//   x = document.getElementsByClassName("column");
//   if (c == "all") c = "";
//   // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
//   for (i = 0; i < x.length; i++) {
//     w3RemoveClass(x[i], "show");
//     if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
//   }
// }

// // Show filtered elements
// function w3AddClass(element, name) {
//   var i, arr1, arr2;
//   arr1 = element.className.split(" ");
//   arr2 = name.split(" ");
//   for (i = 0; i < arr2.length; i++) {
//     if (arr1.indexOf(arr2[i]) == -1) {
//       element.className += " " + arr2[i];
//     }
//   }
// }

// // Hide elements that are not selected
// function w3RemoveClass(element, name) {
//   var i, arr1, arr2;
//   arr1 = element.className.split(" ");
//   arr2 = name.split(" ");
//   for (i = 0; i < arr2.length; i++) {
//     while (arr1.indexOf(arr2[i]) > -1) {
//       arr1.splice(arr1.indexOf(arr2[i]), 1); 
//     }
//   }
//   element.className = arr1.join(" ");
// }

var obj = {
  "cart": {
    "item1": "dog", "qty1": 0,
    "item2": "cat", "qty2": 0,
    "item3": "squirrel", "qty3": 0,
    "item4": "whale", "qty4": 0
  }
};



function addAnimal() {

  obj.cart.qty1 += 1;

  $.post("set_session.php",
    {
      name: obj
    },
    function(data) {
      alert("Dog: " + data);
    });

    var test = obj.cart.qty1;
    alert(test);

}

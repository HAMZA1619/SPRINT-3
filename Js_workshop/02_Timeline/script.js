

  // define variable
  var move = document.querySelectorAll(".timeline li");


  function element(e) {
    var div = e.getBoundingClientRect();
    return (
      div.bottom <= document.documentElement.clientHeight  &&
      div.top >= 0 
      // window.innerHeight
    );
  }

  function call() {
    for (var i = 0; i < move.length; i++) {
      if (element(move[i])) {
        move[i].classList.add("show");
      }
    }
  }


  document.addEventListener("scroll", call);








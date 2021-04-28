/*
	drag and drop events
		drag, dragstart, dragenter, dragexit, dragleave, dragover, dragstart
		drag and drop interface
		dataTransfer
*/

var dragItem = document.getElementById("dragElement");
var dragItem1 = document.getElementById("dragElement1");
var dragItem2 = document.getElementById("dragElement2");
var dragItem3 = document.getElementById("dragElement3");
var dragItem4 = document.getElementById("dragElement4");
var droploc = document.getElementById("dropLocation");

dragItem.ondragstart = function(evt){ //this will be fired when th user starts dragging the item
	evt.dataTransfer.setData('key', evt.target.id);
	console.log("its dragging...");
}
dragItem1.ondragstart = function(evt){ //this will be fired when th user starts dragging the item
	evt.dataTransfer.setData('key', evt.target.id);
	console.log("its dragging...");
}
dragItem2.ondragstart = function(evt){ //this will be fired when th user starts dragging the item
	evt.dataTransfer.setData('key', evt.target.id);
	console.log("its dragging...");
}
dragItem3.ondragstart = function(evt){ //this will be fired when th user starts dragging the item
	evt.dataTransfer.setData('key', evt.target.id);
	console.log("its dragging...");
}
dragItem4.ondragstart = function(evt){ //this will be fired when th user starts dragging the item
	evt.dataTransfer.setData('key', evt.target.id);
	console.log("its dragging...");
}
droploc.ondragover = function(evt){ //this will be fired when an element selection is being dragged over to a valid drop location
	evt.preventDefault();
	console.log("its dragover...");
}

  droploc.ondrop = function(evt){//this will be fired when you drop  the dragged item on the drop location
var dropItem = evt.dataTransfer.getData('key');
	evt.preventDefault();
	console.log("its dropped---");
	console.log(dropItem); 
	var myElement = document.getElementById(dropItem);
	console.log(myElement);
	var myNewElement = document.createElement('img');
	myNewElement.src = myElement.src
	droploc.appendChild(myNewElement);
}
  var active = false;
    var currentX;
    var currentY;
    var initialX;
    var initialY;
    var xOffset = 0;
    var yOffset = 0;

    dragItem.addEventListener("touchstart", dragStart, false);
    dragItem.addEventListener("touchend", dragEnd, false);
    dragItem.addEventListener("touchmove", drag, false);

    dragItem.addEventListener("mousedown", dragStart, false);
    dragItem.addEventListener("mouseup", dragEnd, false);
    dragItem.addEventListener("mousemove", drag, false);

    function dragStart(evt) {
      if (evt.type === "touchstart") {
        initialX = evt.touches[0].clientX - xOffset;
        initialY = evt.touches[0].clientY - yOffset;
      } else {
        initialX = evt.clientX - xOffset;
        initialY = evt.clientY - yOffset;
      }

      if (evt.target === dragItem) {
        active = true;
      }
    }

    function dragEnd(evt) {
      initialX = currentX;
      initialY = currentY;

      active = false;
    }

    function drag(evt) {
      if (active) {
      
        evt.preventDefault();
      
        if (evt.type === "touchmove") {
          currentX = evt.touches[0].clientX - initialX;
          currentY = evt.touches[0].clientY - initialY;
        } else {
          currentX = evt.clientX - initialX;
          currentY = evt.clientY - initialY;
        }

        xOffset = currentX;
        yOffset = currentY;

        setTranslate(currentX, currentY, dragItem);
      }
    }

    function setTranslate(xPos, yPos, el) {
      el.style.transform = "translate3d(" + xPos + "px, " + yPos + "px, 0)";
    }

var active = false;
    var currentX;
    var currentY;
    var initialX;
    var initialY;
    var xOffset = 0;
    var yOffset = 0;

    dragItem1.addEventListener("touchstart", dragStart, false);
    dragItem1.addEventListener("touchend", dragEnd, false);
    dragItem1.addEventListener("touchmove", drag, false);

    dragItem1.addEventListener("mousedown", dragStart, false);
    dragItem1.addEventListener("mouseup", dragEnd, false);
    dragItem1.addEventListener("mousemove", drag, false);

    function dragStart(evt) {
      if (evt.type === "touchstart") {
        initialX = evt.touches[0].clientX - xOffset;
        initialY = evt.touches[0].clientY - yOffset;
      } else {
        initialX = evt.clientX - xOffset;
        initialY = evt.clientY - yOffset;
      }

      if (evt.target === dragItem) {
        active = true;
      }
    }

    function dragEnd(evt) {
      initialX = currentX;
      initialY = currentY;

      active = false;
    }

    function drag(evt) {
      if (active) {
      
        evt.preventDefault();
      
        if (evt.type === "touchmove") {
          currentX = evt.touches[0].clientX - initialX;
          currentY = evt.touches[0].clientY - initialY;
        } else {
          currentX = evt.clientX - initialX;
          currentY = evt.clientY - initialY;
        }

        xOffset = currentX;
        yOffset = currentY;

        setTranslate(currentX, currentY, dragItem);
      }
    }

    function setTranslate(xPos, yPos, el) {
      el.style.transform = "translate3d(" + xPos + "px, " + yPos + "px, 0)";
    }

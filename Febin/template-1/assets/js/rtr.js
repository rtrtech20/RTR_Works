// Progress Bar Start
window.onscroll = function () {
  var pos = document.documentElement.scrollTop;
  var calc_height =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  var scroll = (pos * 100) / calc_height;
  document.getElementById("progress").style.width = scroll + "%";

  if ((document.getElementById("progress").style.width = 100)) {
    document.getElementById("progress").style.borderRadius = 0;
  }
};

// Progress Bar End


function showInfo() {
  var myWindow = window.open("", "MsgWindow", "width=200,height=100");
  myWindow.document.write("<p><?php echo "lol"; ?></p>");
}

/* Check if a child is available
/*
/* e.g. $('body').hasChild('div');
 */
$.fn.hasChild = function(selector){
  return ($("> " + selector, this).length > 0);
}
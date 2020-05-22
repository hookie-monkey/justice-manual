var j = jQuery.noConflict();

(function($){
    j(document).ready(function(){
     
         // init Masonry
var $grid = j('.grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
  });
  
  // layout Masonry after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.masonry();
  });
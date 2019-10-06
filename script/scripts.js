
'use-strict';

var numberofItems = $('.show-comment .list-group').length;
var limitPerPage = 2;
$(".show-comment .list-group:gt(" + (limitPerPage -1) +")").hide();
var totalPages = Math.round(numberofItems/ limitPerPage);
$('.pagination').append("<li><a href='javascript:void(0)'>"+1+"</a></li>");

for(var i=2 ; i <= totalPages; i++)
{
    $('.pagination').append("<li class='current-page'><a href='javascript:void(0)'>"+i+"</a></li>");
}
$('.pagination').append("<li><a href='javascript:void(0) aria-label='next'><span aria-hidden='true'>&raquo;</span></a></li>");

$(".pagination li.current-page").on("click", function () {
    if($(this).hasClass("active"))
    {
        return false
    }
    else
    {
        var currntpage = $(this).index();
        $(".pagination li").removeClass("active");
        $(this).addClass("active");
        $(".show-comment .list-group").hide();

        var grandTotal = limitPerPage * currntpage;

        for(var i= grandTotal -limitPerPage; i <grandTotal; i++)
        {
            $(".show-comment .list-group:eq("+1+")").show();
        }
    }

});
$("#next-page").on("click",function () {
    var currentPage =$(".pagination li.active").index();
    if(currentPage === totalPages)
    {
        return false;
    }
    else {
        currentPage++;
        $(".pagination li").removeClass("active");
        $(".show-comment .list-group").hide();
        var grandTotal = limitPerPage * currntpage;

        for(var i= grandTotal -limitPerPage; i <grandTotal; i++)
        {
            $(".show-comment .list-group:eq("+1+")").show();
        }
        $(".pagination li.currnet-page:eq("+(currentPage -1)+")").addClass("active");
    }
});

$("#previous-page").on("click",function () {
    var currentPage =$(".pagination li.active").index();
    if(currentPage === 1)
    {
        return false;
    }
    else {
        currentPage++;
        $(".pagination li").removeClass("active");
        $(".show-comment .list-group").hide();
        var grandTotal = limitPerPage * currntpage;

        for(var i= grandTotal -limitPerPage; i <grandTotal; i++)
        {
            $(".show-comment .list-group:eq("+1+")").show();
        }
        $(".pagination li.currnet-page:eq("+(currentPage -1)+")").addClass("active");
    }
})


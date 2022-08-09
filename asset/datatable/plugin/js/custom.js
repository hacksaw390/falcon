$(document).ready(function(){

	// $('#myDataTable').DataTable();

	 var table = $("#myDataTable").DataTable({
        lengthChange: true,
        lengthMenu: [ 2, 5, 10, 15, 25, 50, 100],
        pageLength: 5,
        buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
  });
  table.buttons().container().appendTo( '#myDataTable_wrapper .col-md-6:eq(0)');

});

 // 'colvis'





































// window.onload = function(){
//     $(".load").css("display", "none");
// }


// $(function(){


//   var name = $("#name").attr("type");
  
//   $("#check").click(function(){
//       var btnfirstvalu = $(this).text();

//       if($(this).attr("check") == "none"){
//         $("#check").text("Click Kora Hoyeche");
//         $(this).attr("check", "checking");
//         $(this).addClass("classtype");
//       }else{
//         $("#check").text("Click");
//         $(this).attr("check", "none");
//         $(this).removeClass("classtype");
//       }

//   });


//   // $("#check").slice();





// });

// // console.log("This is my test jquery");
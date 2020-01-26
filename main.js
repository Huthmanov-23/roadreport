$(document).ready(function () {
  // Add minus icon for collapse element which is open by default
  $(".collapse.show").each(function () {
    $(this)
      .prev(".card-header")
      .find(".fa")
      .addClass("fa-minus")
      .removeClass("fa-plus");
  });

  // Toggle plus minus icon on show hide of collapse element
  $(".collapse")
    .on("show.bs.collapse", function () {
      $(this)
        .prev(".card-header")
        .find(".fa")
        .removeClass("fa-plus")
        .addClass("fa-minus");
    })
    .on("hide.bs.collapse", function () {
      $(this)
        .prev(".card-header")
        .find(".fa")
        .removeClass("fa-minus")
        .addClass("fa-plus");
    });
  $("#select1").change(function () {
    var t = $("#select1").val();
    if (t == "Information On The Page") {
      $("#para1").show("slow");
      $("#text_box").show("slow");
      $("#select2").hide("slow");
      $("#para2").hide("slow");
    } else if (t == "---") {
      $("#para1").hide("slow");
      $("#text_box").hide("slow");
      $("#select2").hide("slow");
    } else if (t == "General Observation") {
      $("#para1").show("slow");
      $("#text_box").show("slow");
      $("#select2").hide("slow");
      $("#para2").hide("slow");
    } else if (t == "A problem on the Website?") {
      $("#select2").show("slow");
      $("#para1").hide("slow");
      $("#text_box").hide("slow");
    }
    $("#select2").change(function () {
      var g = $("#select2").val();
      if (g == "Not correct/ Out of Date?") {
        $("#para2").show("slow");
        $("#text_box").show("slow");
      } else if (g == "Not Clear") {
        $("#para2").show("slow");
        $("#text_box").show("slow");
      }
    })
  })
  $("#forms").submit(function (event) {
    var e = $("#text_box").val();
    if (e.trim() == "") {
      alert("Please fill in the message box");
      event.preventDefault();
    } else if (e.trim() != "") {
      alert("message recieved");
    }
  });

 


});
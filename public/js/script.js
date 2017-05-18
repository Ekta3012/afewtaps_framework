$(document).ready(function(){
    $(".personal_menu").hover(function(){
        $(".first_child").show();
        $(".personal_menu").css("border-bottom","1px solid #000");
        $(".second_child,.seven_child,.three_child,.fourth_child,.fifth_child,.six_child").hide();
        $(".choice_intro,.peak_hours,.bill_payment,.Convinience,.repeat_order,.co-working").css("border-bottom","1px solid #dcdcdc");
    });
    $(".choice_intro").hover(function(){
        $(".second_child").show();
         $(".choice_intro").css("border-bottom","1px solid #000");
        $(".first_child,.seven_child,.three_child,.fourth_child,.fifth_child,.six_child").hide();
        $(".personal_menu,.peak_hours,.bill_payment,.Convinience,.repeat_order,.co-working").css("border-bottom","1px solid #dcdcdc");
    });
    $(".peak_hours").hover(function(){
        $(".three_child").show();
         $(".peak_hours").css("border-bottom","1px solid #000");
        $(".second_child,.seven_child,.first_child,.fourth_child,.fifth_child,.six_child").hide();
        $(".personal_menu,.choice_intro,.bill_payment,.Convinience,.repeat_order,.co-working").css("border-bottom","1px solid #dcdcdc");
    });
    $(".bill_payment").hover(function(){
        $(".fourth_child").show();
        $(".bill_payment").css("border-bottom","1px solid #000");
        $(".second_child,.seven_child,.three_child,.first_child,.fifth_child,.six_child").hide();
        $(".personal_menu,.peak_hours,.choice_intro,.Convinience,.repeat_order,.co-working").css("border-bottom","1px solid #dcdcdc");
    });
    $(".Convinience").hover(function(){
        $(".fifth_child").show();
        $(".Convinience").css("border-bottom","1px solid #000");
        $(".second_child,.seven_child,.three_child,.fourth_child,.first_child,.six_child").hide();
        $(".personal_menu,.peak_hours,.bill_payment,.choice_intro,.repeat_order,.co-working").css("border-bottom","1px solid #dcdcdc");
    });
    $(".repeat_order").hover(function(){
        $(".six_child").show();
        $(".repeat_order").css("border-bottom","1px solid #000");
        $(".second_child,.seven_child,.three_child,.fourth_child,.fifth_child,.first_child").hide();
        $(".personal_menu,.peak_hours,.bill_payment,.Convinience,.choice_intro,.co-working").css("border-bottom","1px solid #dcdcdc");
    });
    $(".co-working").hover(function(){
        $(".seven_child").show();
        $(".co-working").css("border-bottom","1px solid #000");
        $(".second_child,.first_child,.three_child,.fourth_child,.fifth_child,.six_child").hide();
        $(".personal_menu,.peak_hours,.bill_payment,.Convinience,.repeat_order,.choice_intro").css("border-bottom","1px solid #dcdcdc");
    });
    
});
 $(document).ready(function(){
      $(".sec3_1").hover(function(){
        $("#sec3_p1").hide();
        $("#sec3_p1_h").show();
      },function(){
        $("#sec3_p1").show();
        $("#sec3_p1_h").hide();
        
      });
       $(".sec3_2").hover(function(){
        $("#sec3_p2").hide();
        $("#sec3_p2_h").show();
      },function(){
        $("#sec3_p2").show();
        $("#sec3_p2_h").hide();
        
      });
    });
$(document).ready(function(){
	$("#expand").click(function(){
		$("#form").fadeIn();
	});
	$("#cross").click(function(){
		$("#form").fadeOut();
	});
})
$(document).ready(function(){
	$("#plus").click(function(){
        $(".built-in").fadeIn();
	});
	$("#cross").click(function(){
        $(".built-in").fadeOut();
	});
});
 $(document).ready(function(){
    $(".increase_sales").hover(function(){
        $(".first_child").show();
         $(".increase_sales").css("border-bottom","1px solid #000");
        $(".second_child,.three_child,.fourth_child,.fifth_child,.six_child").hide();
        $(".brand_img,.customer_data,.floor_operation,.good_reviews,.timely").css("border-bottom","1px solid #dcdcdc");
    });
    $(".brand_img").hover(function(){
        $(".second_child").show();
         $(".brand_img").css("border-bottom","1px solid #000");
        $(".first_child,.three_child,.fourth_child,.fifth_child,.six_child").hide();
        $(".increase_sales,.customer_data,.floor_operation,.good_reviews,.timely").css("border-bottom","1px solid #dcdcdc");
    });
    $(".customer_data").hover(function(){
        $(".three_child").show();
         $(".customer_data").css("border-bottom","1px solid #000");
        $(".second_child,.first_child,.fourth_child,.fifth_child,.six_child").hide();
        $(".brand_img,.increase_sales,.floor_operation,.good_reviews,.timely").css("border-bottom","1px solid #dcdcdc");
    });
    $(".floor_operation").hover(function(){
        $(".fourth_child").show();
         $(".floor_operation").css("border-bottom","1px solid #000");
        $(".second_child,.first_child,.three_child,.fifth_child,.six_child").hide();
        $(".brand_img,.customer_data,.increase_sales,.good_reviews,.timely").css("border-bottom","1px solid #dcdcdc");
    });
    $(".good_reviews").hover(function(){
        $(".fifth_child").show();
         $(".good_reviews").css("border-bottom","1px solid #000");
        $(".second_child,.first_child,.fourth_child,.three_child,.six_child").hide();
        $(".brand_img,.customer_data,.floor_operation,.increase_sales,.timely").css("border-bottom","1px solid #dcdcdc");
    });
    $(".timely").hover(function(){
        $(".six_child").show();
         $("timely").css("border-bottom","1px solid #000");
        $(".second_child,.first_child,.fourth_child,.fifth_child,.three_child").hide();
        $(".brand_img,.customer_data,.floor_operation,.good_reviews,.increase_sales").css("border-bottom","1px solid #dcdcdc");
    });
    $(document).ready(function(){
    	$(".li1").hover(function(){
    		$(".li1_content").show();
    		$(".li1").css("border-bottom","1px solid #000");
	        $(".li2_content,.li3_content,.li4_content,.li5_content,.li6_content").hide();
	        $(".li2,.li3,.li4,.li5,.li6").css("border-bottom","1px solid #dcdcdc");
    	});
    	$(".li2").hover(function(){
    		$(".li2_content").show();
    		$(".li2").css("border-bottom","1px solid #000");
	        $(".li1_content,.li3_content,.li4_content,.li5_content,.li6_content").hide();
	        $(".li1,.li3,.li4,.li5,.li6").css("border-bottom","1px solid #dcdcdc");
    	});
    	$(".li3").hover(function(){
    		$(".li3_content").show();
    		$(".li3").css("border-bottom","1px solid #000");
	        $(".li1_content,.li2_content,.li4_content,.li5_content,.li6_content").hide();
	        $(".li1,.li2,.li4,.li5,.li6").css("border-bottom","1px solid #dcdcdc");
    	});
    	$(".li4").hover(function(){
    		$(".li4_content").show();
    		$(".li4").css("border-bottom","1px solid #000");
	        $(".li2_content,.li3_content,.li1_content,.li5_content,.li6_content").hide();
	        $(".li2,.li3,.li1,.li5,.li6").css("border-bottom","1px solid #dcdcdc");
    	});
    	$(".li5").hover(function(){
    		$(".li5_content").show();
    		$(".li5").css("border-bottom","1px solid #000");
	        $(".li2_content,.li3_content,.li4_content,.li1_content,.li6_content").hide();
	        $(".li2,.li3,.li4,.li1,.li6").css("border-bottom","1px solid #dcdcdc");
    	});
    	$(".li6").hover(function(){
    		$(".li6_content").show();
    		$(".li6").css("border-bottom","1px solid #000");
	        $(".li2_content,.li3_content,.li4_content,.li5_content,.li1_content").hide();
	        $(".li2,.li3,.li4,.li5,.li1").css("border-bottom","1px solid #dcdcdc");
    	});
    });
    
});

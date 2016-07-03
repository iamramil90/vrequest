var js = jQuery.noConflict();

js(document).ready(function(event){



	//sticky wrapper
	js(".header.sticky").sticky({topSpacing:0});
	js(".menu.sticky").sticky({topSpacing:"50px"});


	//change window layout
	var windowHeight = js(window).height();
	js(".content, .sidebar").height(windowHeight - 50);

	js(window).resize(function(){
		js(".content, .sidebar").height(windowHeight - 45);
	});


});

"use strict";

var globalvrComponent = {};

(function($){

	$(function(){

		var vrComponent = {

			'getdateRage':function(){

				var $this = this;
				var fromDate = $("#from_date");
				var toDate   = $("#to_date");


				fromDate.on('change',function(d){
					vrComponent.addText(fromDate.val(),toDate.val());

				});
				toDate.on('change',function(d){
					vrComponent.addText(fromDate.val(),toDate.val());
				});


			},
			'addText':function(from,to){

				var dateRange = $("#date_range");
				var noOfDays = 0;
				var txt = 'Total number of Days: ';
				noOfDays = vrComponent.calcnoOfDays(from,to);

				if(from === to){

					dateRange.show();
					dateRange.html(txt + 1);

				}else if(noOfDays >= 1){

					dateRange.show();
					dateRange.html(txt + noOfDays);
				}else{
					dateRange.hide();
				}
			},

			'calcnoOfDays':function(from,to){

				var ONE_DAY = 1000 * 60 * 60 * 24;

				var date1_ms = new Date(from);
				var date2_ms = new Date(to);

				if(date1_ms <= date2_ms){
					var difference_ms = Math.abs(date1_ms - date2_ms);
				}

				return Math.round(difference_ms/ONE_DAY);
			},

			'pagination': function(){

				var ukPagination = $(".uk-pagination");
				var request_url =  ukPagination.attr('data-ajax-url');

				var ajax = (function(page){
					$.ajax({
						url:request_url + "/" + page,
						type: 'GET',
						cache: false,
						dataType: "json",
						success:function(data) {
							var tbl = "";
							$(data).each(function(index,item){
								tbl += "<tr>";
								tbl +="<td>" + item.request_id + "</td>";
								tbl +="<td>" + item.vehicle_name + "</td>";
								tbl +="<td>" + item.request_date + "</td>";
								tbl +="<td>" + item.request_status  + "</td>";
								tbl +="<td>" + "</td>";
								tbl += "</tr>";
							});

							$(".tblgrid tbody").html(tbl);
						},


					});

				});

				if(request_url){
					ajax(1);
				}

				$('[data-uk-pagination]').on('select.uk.pagination', function(e, pageIndex){
					ajax(pageIndex + 1);
				});

			},
			'init' : function(){


				vrComponent.getdateRage();
				vrComponent.pagination();
				
			}


		}


		// initialized vrComponents
		vrComponent.init();

		globalvrComponent = vrComponent;
	});


})(jQuery);

// $(function() {
// 	$('.research-dropdown-menu .research-project-type').click(function(e) {
// 		e.preventDefault()
// 		researchProjectTypeID = $(this).attr('href');
// 		// $(researchProjectTypeID).tab('show');
// 		$(this).tab('show');
// 	});
// });


(function($) {

	console.log("ready!");

	$('body:not(.home)').addClass("sub-page");



	$('.tribe-common-h3').append('<i class="far fa-chevron-down ml-3"></i>');



	$('.mc4wp-response').appendTo('.modal-conf');

	if ($(".mc4wp-alert").length) {
		$([document.documentElement, document.body]).animate({
			scrollTop: $(".mc4wp-alert").offset().top - 180
		}, 1000);
	}


	// var x, i, j, l, ll, selElmnt, a, b, c;
	// /* Look for any elements with the class "custom-select": */
	// x = document.getElementsByClassName("custom-select");
	// l = x.length;
	// for (i = 0; i < l; i++) {
	// 	selElmnt = x[i].getElementsByTagName("select")[0];
	// 	ll = selElmnt.length;
	// 	/* For each element, create a new DIV that will act as the selected item: */
	// 	a = document.createElement("DIV");
	// 	a.setAttribute("class", "select-selected");
	// 	a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
	// 	x[i].appendChild(a);
	// 	/* For each element, create a new DIV that will contain the option list: */
	// 	b = document.createElement("DIV");
	// 	b.setAttribute("class", "select-items select-hide");
	// 	for (j = 1; j < ll; j++) {
	// 		/* For each option in the original select element,
	// 		create a new DIV that will act as an option item: */
	// 		c = document.createElement("DIV");
	// 		c.innerHTML = selElmnt.options[j].innerHTML;
	// 		c.addEventListener("click", function(e) {
	// 			/* When an item is clicked, update the original select box,
	// 			and the selected item: */
	// 			var y, i, k, s, h, sl, yl;
	// 			s = this.parentNode.parentNode.getElementsByTagName("select")[0];
	// 			sl = s.length;
	// 			h = this.parentNode.previousSibling;
	// 			for (i = 0; i < sl; i++) {
	// 				if (s.options[i].innerHTML == this.innerHTML) {
	// 					s.selectedIndex = i;
	// 					h.innerHTML = this.innerHTML;
	// 					y = this.parentNode.getElementsByClassName("same-as-selected");
	// 					yl = y.length;
	// 					for (k = 0; k < yl; k++) {
	// 						y[k].removeAttribute("class");
	// 					}
	// 					this.setAttribute("class", "same-as-selected");
	// 					break;
	// 				}
	// 			}
	// 			h.click();
	// 		});
	// 		b.appendChild(c);
	// 	}
	// 	x[i].appendChild(b);
	// 	a.addEventListener("click", function(e) {
	// 		/* When the select box is clicked, close any other select boxes,
	// 		and open/close the current select box: */
	// 		e.stopPropagation();
	// 		closeAllSelect(this);
	// 		this.nextSibling.classList.toggle("select-hide");
	// 		this.classList.toggle("select-arrow-active");
	// 	});
	// }
	//
	// function closeAllSelect(elmnt) {
	// 	/* A function that will close all select boxes in the document,
	// 	except the current select box: */
	// 	var x, y, i, xl, yl, arrNo = [];
	// 	x = document.getElementsByClassName("select-items");
	// 	y = document.getElementsByClassName("select-selected");
	// 	xl = x.length;
	// 	yl = y.length;
	// 	for (i = 0; i < yl; i++) {
	// 		if (elmnt == y[i]) {
	// 			arrNo.push(i)
	// 		} else {
	// 			y[i].classList.remove("select-arrow-active");
	// 		}
	// 	}
	// 	for (i = 0; i < xl; i++) {
	// 		if (arrNo.indexOf(i)) {
	// 			x[i].classList.add("select-hide");
	// 		}
	// 	}
	// }
	//
	// /* If the user clicks anywhere outside the select box,
	// then close all select boxes: */
	// document.addEventListener("click", closeAllSelect);



	var
		$player = $(".audio-ctrl"),
		$transcript = $(".audio-transcript");

	$(".audio-ctrl").each(function() {

		$(this).attr("aria-pressed", "false");

		$(this).click(function(e) {
			e.preventDefault();

			$player.attr("aria-pressed", "false");

			if ($(this).hasClass("play")) {
				$(this).attr("aria-pressed", "true");
				// 2 sec delay to allow screen reader
				// to read button state
				setTimeout(function() {
					$("#player")[0].play();
				}, 500);
			}
			if ($(this).hasClass("pause")) {
				$("#player")[0].pause();
				$(this).attr("aria-pressed", "true");
			}
			if ($(this).hasClass("read")) {
				$transcript.removeClass("visually-hidden").focus();
			}
		});
	});







	var timer;
	var delay = 400;

	if ($(window).width() >= 1200) {

		$(".sub-page .nav-wrapper .navbar").hover(function() {

			timer = setTimeout(function() {

				$('.menu-underlay').fadeIn('fast', function() {});
				$('.page-overlay').fadeIn('fast', function() {});

			}, delay);

		}, function() {

			$('.menu-underlay').fadeOut('fast', function() {});
			$('.page-overlay').fadeOut('fast', function() {});

			clearTimeout(timer);
		});

	}

	var menuTimer;

	if ($(window).width() >= 1200) {

		$(".sub-page .menu-item").hover(function() {

			var $this = $(this);

			menuTimer = setTimeout(function() {

				$this.find('.menu-item-description').addClass('d-block');
				$this.find('ul.dropdown-menu').fadeIn(200, function() {});
				$this.find('.menu-item-description').fadeTo(200, 1, function() {});

			}, delay);

		}, function() {

			var $this = $(this);

			$this.find('ul.dropdown-menu').fadeOut('fast', 0, function() {});
			$this.find('.menu-item-description').delay(0).fadeTo('fast', 0, function() {});

			clearTimeout(menuTimer);
		});

	}

	if ($(window).width() >= 1200) {
		$(".home .menu-item").hover(function() {

			var $this = $(this);
			$this.find('ul.dropdown-menu').fadeIn('fast', function() {});

		}, function() {

			var $this = $(this);
			$this.find('ul.dropdown-menu').fadeOut('fast', 0, function() {});

		});

	}









	var maxHeight = -1;

	$('.menu-item-description').each(function() {
		maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
		// console.log(maxHeight);
	});

	$('.sub-page li.menu-item ul.dropdown-menu').css({
		paddingTop: maxHeight + 24
	});

	// $('.menu-item-description').each(function() {
	// 	$(this).height(maxHeight);
	// });


	// $(".navbar").hover(function() {
	//
	// 	if ($(window).width() >= 1200) {
	// 		$('.menu-underlay').delay(250).fadeToggle('fast', function() {
	//
	//
	// 		});
	//
	// 		$('.page-overlay').delay(250).fadeToggle('fast', function() {
	//
	// 		});
	//
	// 		$('ul.dropdown-menu').delay(400).fadeToggle('fast', function() {
	//
	// 		});
	//
	//
	// 		$('.menu-item-description').delay(600).toggleClass('d-block', function() {
	//
	// 		});
	//
	//
	// 		$('.nav-item').toggleClass('show');
	// 		$(".menu-item-description").toggleClass('d-block');
	// 	}
	// });

	// $(".menu-item").hover(function() {
	// 	$(this).find('ul.dropdown-menu').delay(250).fadeToggle('fast', function() {
	//
	// 	});
	//
	// 	$(this).find('.menu-item-description').delay(800).fadeToggle('fast', function() {
	//
	// 	});
	// });


	if ($(window).width() >= 1200) {

		// $(".dropdown-menu").css('margin-top', 0);
		// $(".dropdown").mouseover(function() {
		// 		$(this).addClass('show').attr('aria-expanded', "true");
		// 		$(this).find('.dropdown-menu').addClass('show');
		// 	})
		// 	.mouseout(function() {
		// 		$(this).removeClass('show').attr('aria-expanded', "false");
		// 		$(this).find('.dropdown-menu').removeClass('show');
		// 	});

	} else if ($(window).width() < 1200) {

		$(".dropdown-toggle").removeClass('active');
		$(".dropdown-toggle").attr('aria-expanded', "false");
		$(".dropdown-toggle").siblings('.dropdown-menu').removeClass('d-block');
		$(".dropdown-toggle").siblings('.dropdown-menu').addClass('d-none');
		$(".dropdown-toggle").siblings('.dropdown-menu').hide();
		$(".dropdown").removeClass('show')

		$(".dropdown-toggle").on('click', function() {
			if ($(this).hasClass('active')) {
				// alert("Active");

				// $(this).removeClass('active');
				// $(this).attr('aria-expanded', "false");
				// $(this).siblings('.dropdown-menu').removeClass('d-block');
				// $(this).siblings('.dropdown-menu').addClass('d-none');
				// $(this).siblings('.dropdown-menu').hide();

				url = $(this).attr('href');
				console.log(url);
				window.location = url;

			} else if (!$(this).hasClass('active')) {
				// alert("Not active");

				$(this).addClass('active');
				$(this).attr('aria-expanded', "true");
				$(this).siblings('.dropdown-menu').addClass('d-block');
				$(this).siblings('.dropdown-menu').removeClass('d-none');
				$(this).siblings('.dropdown-menu').show();
			}
		});
		$(".dropdown").click(function() {

			if ($(this).hasClass('show')) {
				$(this).removeClass('show');

			} else {
				$(this).addClass('show');
			}

		});
	}









	$(document).on('facetwp-loaded', function() {
		if (FWP.loaded) {
			$('html, body').animate({
				scrollTop: $('.facetwp-template').offset().top
			}, 500);
		}
	});

	if (window.location.href.indexOf("?") > -1) {
		$(document).on('facetwp-loaded', function() {
			if (!FWP.loaded) {
				FWP.parse_facets(); // parse the DOM to get the facet selections
				FWP.set_hash(); // update the URL bar
				$('html, body').animate({
					scrollTop: $('.facetwp-template').offset().top
				}, 500);
			}
		});
	}




	// searchIconWidth = $('.search-icon a').width();
	// $('.search-icon a').width(searchIconWidth)




	var urlHash = window.location.href.split("#")[1];
	if (urlHash && $('#' + urlHash).length)
		$('html,body').animate({
			scrollTop: $('#' + urlHash).offset().top - 60
		}, 1000);







	// if ($(window).width() <= 1200) {
	// 	$('.nav-link').on('click', function() {
	//
	// 	});
	// }
	// $("#search-field").focus();
	// $('form:first *:input[type!=hidden]:first').focus();

	$('.search-icon').on("click", function() {
		// e.preventDefault();
		$(this).hide();
		$('.searchform').show();
		$("#search-field").show();
		// $("#search-field").delay(2000).hide();
		// $("#search-field").delay(1000).focus();

		console.log('test')

		// $('body').addClass('search-open');

		// if ($('.sub-page-search-underlay').hasClass('d-block')) {
		// 	$('.sub-page-search-underlay').removeClass('d-block')
		// } else {
		// 	$('.sub-page-search-underlay').addClass('d-block');
		// }

	});

	$('body.search-open').on('click', function() {
		// alert("Test");
		// $('.sub-page-search-underlay').removeClass('d-block');
		// $('.sub-page-search-underlay').addClass('d-none');
	});



	elem = $('.searchform form');
	$(document).on('click', function(e) {
		if ($(window).width() >= 1200) {
			if ($(e.target).closest(elem).length === 0) {
				$('.searchform').toggleClass('d-none');
				$(".search-icon").show();
				// $('.sub-page-search-underlay').removeClass('d-block');
				// $('.sub-page-search-underlay').addClass('d-none');
			}
		}
	});

	$(document).on('keydown', function(e) {
		if ($(window).width() >= 1200) {
			if (e.keyCode === 27) { // ESC
				$('.searchform').toggleClass('d-none');
				$(".search-icon").show();
				// $('.sub-page-search-underlay').removeClass('d-block');
				// $('.sub-page-search-underlay').addClass('d-none');
			}
		}
	});

	$(window).resize(function() {
		$(document).on('click', function(e) {
			if ($(window).width() >= 1200) {
				if ($(e.target).closest(elem).length === 0) {
					$('.searchform').toggleClass('d-none');
					$(".search-icon").show();
					// $('.sub-page-search-underlay').removeClass('d-block');
					// $('.sub-page-search-underlay').addClass('d-none');
				}
			}
		});

		$(document).on('keydown', function(e) {
			if ($(window).width() >= 1200) {
				if (e.keyCode === 27) { // ESC
					$('.searchform').toggleClass('d-none');
					$(".search-icon").show();
					// $('.sub-page-search-underlay').removeClass('d-block');
					// $('.sub-page-search-underlay').addClass('d-none');
				}
			}
		});
	});






	$('.dropdown-toggle.nav-link').click(function() {
		if ($(window).width() >= 1200) {
			location.href = this.href;
		}
	});







	$('.story-img.wp-post-image').unwrap();









	$(document).on('click', '.research-project-type', function(e) {
		e.preventDefault();

		researchProjectTypes = $(this).attr('data-research-project-types');

		FWP.is_reset = true;

		// FWP.auto_refresh = true; // Whether or not to auto-refresh when a facet choice is selected
		// FWP.soft_refresh = false; // This is set to true when paging
		// FWP.is_refresh = true; // This is set to true when a refresh is active
		// FWP.is_reset = true; // This is set to true when resetting
		// FWP.loaded = true; // This remains true after FacetWP initializes

		FWP.facets['research_project_types'] = [researchProjectTypes]; // set facet to no selections
		delete FWP.facets['paged']; // remove "paged" from URL

		FWP.refresh();

		// FWP.reset()
		// FWP.refresh(); // Parse the facets and trigger an ajax refresh
		// FWP.reset(); // Reset all facets
		// FWP.fetch_data(); // Make an ajax request
		// FWP.parse_facets(); // Apply any facet HTML changes to FWP.facets
		// FWP.set_hash(); // Update the permalink URL
		// FWP.load_from_hash(); // Populates facet data from URL data (happens on pageload)
		// FWP.init(); // initializes all FacetWP event listeners
	});

	$(document).on('click', '.clear-research-project-types', function(e) {
		e.preventDefault();
		FWP.reset()
	});





	$('.research-dropdown-menu .research-project-type').click(function(e) {
		e.preventDefault();
		// researchProjectTypeID = $(this).attr('href');
		// $(researchProjectTypeID).tab('show');
		$(this).tab('show')
	});

	//$('.research-dropdown-menu').tab('show')





	$("#mce-EMAIL").attr("placeholder", "Enter Your Email");





	$('#mc-embedded-subscribe').addClass('btn btn-primary');
	// $('#mc_embed_signup .clear').addClass('float-left');
	// $('.mc-field-group').addClass('float-left');
	// $('#mce-responses')






	// var numberDimensions = $(".dimension").length;
	// numberDimensionsDiv = (numberDimensions / 2);
	// console.log(numberDimensionsDiv);
	// $(".spacer-bottom").insertAfter($(".dimension:nth-child(" + numberDimensionsDiv + ")"));
	// $(".spacer-top").insertAfter($(".dimension:nth-child(" + numberDimensionsDiv + ")"));
	$('.dimension').eq(4).addClass('spacer');





	$("#return-to-top").click(function(e) {
		e.preventDefault();
		$("html, body").animate({
			scrollTop: 0
		}, 500);
		return false;
	});




	// $('.accordion .card:nth-child(1) .card-header').addClass('active');




	$('p').each(function() {
		var $this = $(this);
		if ($this.html().replace(/\s|&nbsp;/g, '').length == 0)
			$this.remove();
	});


	$('.card-header').click(function() {

		if ($(this).hasClass('active')) {
			//$('.card-header').removeClass('active');
			$(this).removeClass('active');
		} else {
			//$('.card-header').removeClass('active');
			$(this).addClass('active');
		}



	});


	// Cache selectors
	var lastId,
		topMenu = $("#list-example"),
		topMenuHeight = topMenu.outerHeight() + 15,
		// All list items
		menuItems = topMenu.find("a"),
		// Anchors corresponding to menu items
		scrollItems = menuItems.map(function() {
			var item = $($(this).attr("href"));
			if (item.length) {
				return item;
			}
		});

	// Bind click handler to menu items
	// so we can get a fancy scroll animation
	menuItems.click(function(e) {
		var href = $(this).attr("href"),
			offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
		$('html, body').stop().animate({
			scrollTop: offsetTop
		}, 300);
		e.preventDefault();
	});

	// Bind to scroll
	$(window).scroll(function() {
		// Get container scroll position
		var fromTop = $(this).scrollTop() + topMenuHeight;

		// Get id of current scroll item
		var cur = scrollItems.map(function() {
			if ($(this).offset().top < fromTop)
				return this;
		});
		// Get the id of the current element
		cur = cur[cur.length - 1];
		var id = cur && cur.length ? cur[0].id : "";

		if (lastId !== id) {
			lastId = id;
			// Set/remove active class
			menuItems
				.parent().removeClass("active")
				.end().filter("[href='#" + id + "']").parent().addClass("active");
		}
	});



	squareWidth = $('.square').width();
	$('.square').height(squareWidth);

	$(window).resize(function() {
		squareWidth = $('.square').width();
		$('.square').height(squareWidth);
	});


	// $(".products-nav li a").click(function() {
	//   programNavItemId = $(this).attr('href');
	//
	//   $([document.documentElement, document.body]).animate({
	//     scrollTop: $(programNavItemId).offset().top - 100
	//   }, 600);
	// });




	$("#products-nav-wrapper").sticky({
		topSpacing: 0
	});



	$(".products-nav li").click(function() {
		$(".products-nav li").removeClass('active');
		$(this).addClass('active');
	});






	idHeight = $('.id').outerHeight();
	$('.header-inner').css({
		paddingTop: idHeight
	});

	$(window).resize(function() {
		idHeight = $('.id').outerHeight();
		$('.header-inner').css({
			paddingTop: idHeight
		});
	});





	function responsiveHeaderPositioning() {
		if ($(window).width() < 1200) {

			headerHeight = $('header').height();
			//console.log(headerHeight);
			$('.sub-page .site-content').css({
				//marginTop: headerHeight
			});
			$('.single-products .content-area').css({
				//paddingTop: headerHeight
			});

			$('.single-bio .content-area').css({
				//paddingTop: headerHeight
			});

			$('.single .content-area').css({
				//paddingTop: headerHeight
			});

			$('.post-type-archive .content-area').css({
				//paddingTop: headerHeight
			});

		} else {

			$('.sub-page .site-content').css({
				//marginTop: 0
			});
			$('.sub-page .content-area').css({
				//paddingTop: 0
			});
		}
	}
	responsiveHeaderPositioning();

	$(window).resize(function() {
		responsiveHeaderPositioning();
	});








	headerInnerMarginRight = $('.header-inner').css('marginRight');
	navWrapperWidth = $('.nav-wrapper').width();

	$('.menu-underlay .inner').css({
		right: headerInnerMarginRight,
		width: navWrapperWidth + 60
	})

	// $(".sub-page .menu-item").not(".menu-item li").hover(function() {
	//   $('.menu-underlay').delay(100).toggle(200)
	// });









	function setLeftMargin() {
		getContainerMargin = $(".get-my-margin").css('marginLeft');

		$('.home .jumbotron .text').css({
			paddingLeft: getContainerMargin
		})
	}
	setLeftMargin()

	$(window).resize(function() {
		setLeftMargin()
	});




	// topMenuNavItemWidth = $('#top-menu li a').width();
	// $('#top-menu li a').width(topMenuNavItemWidth);



	function setSubPageHeroMargin() {
		logoToggleWrapperMarginLeft = $('.logo-toggle-wrapper').css('margin-left');
		subPageHeaderInnerMarginLeft = $('.header-inner').css('margin-left');

		if ($(window).width() >= 1200) {
			//console.log(headerInnerMarginLeft);
			$('#sub-page-hero .text').css({
				paddingLeft: subPageHeaderInnerMarginLeft
			});

			$('#search-results-hero .text').css({
				paddingLeft: subPageHeaderInnerMarginLeft
			});

			$('#error404-page-hero .text').css({
				paddingLeft: subPageHeaderInnerMarginLeft
			});

			$('.bio-header .content').css({
				paddingLeft: subPageHeaderInnerMarginLeft
			});

		} else {
			$('#sub-page-hero .text').css({
				paddingLeft: logoToggleWrapperMarginLeft
			});

			$('#search-results-hero .text').css({
				paddingLeft: logoToggleWrapperMarginLeft
			});

			$('#error404-page-hero .text').css({
				paddingLeft: logoToggleWrapperMarginLeft
			});

			$('.bio-header .content').css({
				paddingLeft: logoToggleWrapperMarginLeft
			});
		}
	}
	setSubPageHeroMargin();

	function setBioHeroMargin() {
		// headerInnerMarginLeft = $('.header-inner').css('margin-left');
		//console.log(headerInnerMarginLeft);
		// $('.bio-header .content').css({
		// 	paddingLeft: headerInnerMarginLeft
		// });
	}
	setBioHeroMargin();


	$(window).resize(function() {
		setSubPageHeroMargin();
		setBioHeroMargin();
	});




	menuItemWidth = $('#primary-menu .menu-item').outerWidth();
	$('.donate').width(menuItemWidth);

	$('.search-form').css({
		maxWidth: (menuItemWidth * 3) + 36
	})




	$('.navbar-toggler').click(function() {
		$(this).toggleClass('active');
		$('.navbar').toggleClass('open')
		$('.site-header').toggleClass('active');
		$('.navbar-brand .default').toggle();
		$('.navbar-brand .mobile-active').toggle();


	});





	$('#primary-menu .menu-item-has-children .nav-link').prepend('<i class="fas fa-plus d-xl-none"></i>');
	$('#primary-menu .menu-item-has-children .nav-link').prepend('<i class="fas fa-minus d-xl-none"></i>');




	topWidth = $('.top').width();
	$('.searchform form').width(topWidth);

	$(window).resize(function() {
		topWidth = $('.top').width();
		$('.searchform form').width(topWidth);
	});




	$('#primary-menu').hover(function() {
		$('.tag').toggleClass('active');
	});





	$('.dropdown-menu li a').append('<i class="fas fa-chevron-right"></i>');





	jumbotronTextHeight = $('.jumbotron .text').height();
	$('.nav-wrapper .tag').height(jumbotronTextHeight);

	$(window).resize(function() {
		jumbotronTextHeight = $('.jumbotron .text').height();
		$('.nav-wrapper .tag').height(jumbotronTextHeight);
	});



	function sameHeightElement() {
		if ($(window).width() >= 992) {
			$('.same-height-wrapper').each(function() {

				var highestBox = 0;

				$('.same-height', this).each(function() {
					if ($(this).height() > highestBox) {
						highestBox = $(this).height();
					}
				});

				$('.same-height', this).height(highestBox);

				var highestBoxH = 0;

				$('.same-height-h', this).each(function() {
					if ($(this).height() > highestBoxH) {
						highestBoxH = $(this).height();
					}
				});

				$('.same-height-h', this).height(highestBoxH);
			});
		} else {
			$('.same-height').css({
				height: 'auto'
			})

			$('.same-height-h').css({
				height: 'auto'
			})
		}
	}
	sameHeightElement();


	$(window).resize(function() {
		sameHeightElement();
	});



	$('.home .jumbotron').css({
		//marginTop: idHeight
	});

	$(".carousel-item:nth-child(1)").addClass("active");




	$(".media-carousel-inner").slick({
		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		arrows: true,
		responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
	});
}(jQuery));
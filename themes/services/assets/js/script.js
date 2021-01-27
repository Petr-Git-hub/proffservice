$(function () {
	
	$('.pricelist-more').on('click', function(){
		$(this).hide();
		$(this).parents('table').find('.pricelist-row.hidden').removeClass('hidden');
	});

	$('#header-search').autocomplete({
		minChars: 3,
		maxHeight: 400,
		width: 'flex',
		groupBy: 'category',
		lookup: function (query, done) {
			$.request('onSearch', {
				data: {q: query},
				success: function(data){
					var result = {
						suggestions: JSON.parse(data.result)
					}
					done(result);
				}
			});
		},
		onSelect: function (suggestion) {
			localStorage.setItem('header-search', suggestion.value);
			location.href = suggestion.data.slug;
		}
	});

	var headerSearch = localStorage.getItem('header-search');
	if(headerSearch != null)
	{
		$('.pricelist-title > div').each(function(index, item){
			if($(item).text().indexOf(headerSearch) > -1)
			{
				$(item).addClass('search-result');
			}
		});
		localStorage.removeItem('header-search');
	};


	//  hamburger
	$(".hamburger").click(function(){
		$(this).toggleClass("is-active");
		$("body").toggleClass("active");
	});


	// new TypeIt(".inp-placeholder")
	// 	.type("Первый текст")
	// 	.pause(1000).delete().type("третий текст").pause(1000).delete().options({ speed: 500, lifeLike: true }).go()





});
<?php /* Template Name: CEP */ ?>
<?php if(current_user_can('administrator') ) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE | page-cep.php</div>
<?php }
get_header();
$pageTitle = get_the_title();
$iconHeader = 'Fale';
include('include-header-title.php');

$cep = $_GET['cep'] ?? $_REQUEST['cep'] ?? '';

echo do_shortcode( '[wpsl start_location="' . $cep . '"]' ); ?>

<style>
.map-buttons {
	float: right !important;
	max-width: 200px;
	text-align: right;
	display: flex;
}
.map-button {
	background: white;
	border: none;
	font-weight: 300;
    letter-spacing: -0.05em;
    padding: 5px 13px;
	margin: 0;
	cursor: pointer;
	transition: all 0.1s ease-out;
	outline: none!important;
}
.map-button:hover {
	color: #6C098E;
}
.map-button.active {
	background: #6C098E;
	color: white;
}
.wpsl-selected-item,
#wpsl-search-input,
.map-button {
	height: 35px!important;
}
.wpsl-dropdown .wpsl-selected-item,
.wpsl-dropdown li {
	list-style: none;
    padding: 9px 12px 3px!important;
    font-size: 13px;
}
#wpsl-wrap {
    margin-bottom: -50px;
}
.wpsl-search {
	margin-bottom: 0;
}
.wpsl-direction-after {
	display: none;
}
#wpsl-search-wrap form {
    width: 100%;
    display: initial;
}
#wpsl-search-wrap .wpsl-input {
	position: relative;
}

#wpsl-search-wrap .wpsl-input svg {
	width: 25px;
    height: 25px;
    opacity: 0.2;
    position: absolute;
    top: 4px;
    right: 19px;
}
#wpsl-category {
	width: 65%;
}
#wpsl-category label {
	white-space: nowrap;
    width: auto;
    font-size: 14px;
    padding: 3px 0 0;
}
#wpsl-result-list {
	width: 100%;
	margin: 0;
}
#wpsl-gmap {
	width: 100%;
	height: 80vh!important;
	transition: opacity 0.2s ease-out;
}
.wpsl-store-name {
	font-size: 18px;
	margin: 0 0 20px 0;
	font-weight: bold;
}
.wpsl-store-name img {
	margin: 0 10px 0 0;
}
.wpsl-store-name strong {
	padding-left: 10px;
}
.wpsl-store-location,
.wpsl-contact-details {
	padding-left: 40px;
    font-size: 13px;
}
.wpsl-contact-details {
	margin-top: 20px!important;
	margin-bottom: 20px!important;
}

.wpsl-contact-details span {
	margin-bottom: 10px;
}
.wpsl-back,
.wpsl-directions {
	color: black;
	font-size: 13px;
	font-weight: bold;
}
.wpsl-directions {
	margin: 20px 0 0;
}
.wpsl-back:hover,
.wpsl-directions:hover {
	color: #6C098E;
	text-decoration: none;
}
#wpsl-wrap #wpsl-result-list ul li:last-child {
	border-bottom-color: white!important;
}
.wpsl-no-results-msg {
	letter-spacing: -0.06em;
    font-size: 14px;
	opacity: 0.55;
}
.wpsl-store-location p {
	padding-left: 30px;
}
#wpsl-direction-details::-webkit-scrollbar-track,
#wpsl-stores::-webkit-scrollbar-track {
	background-color: #F5F5F5;
}

#wpsl-direction-details::-webkit-scrollbar,
#wpsl-stores::-webkit-scrollbar {
	width: 6px;
	background-color: #fff;
}

#wpsl-direction-details::-webkit-scrollbar-thumb,
#wpsl-stores::-webkit-scrollbar-thumb {
	background-color: rgba(0, 0, 0, 0.15);
}
.wpsl-direction-txt {
    font-size: 13px;
}
.wpsl-direction-index {
    font-size: 13px;
    font-weight: bold;
}
.wpsl-direction-distance {
	text-transform: uppercase;
	opacity: 0.5;
}
.list #wpsl-gmap {
	opacity: 0;
}
.custom-km {
    display: block;
}
#wpsl-category {
    width: 60%;
}
.map-button {
    width: 100px;
}


@media screen and (min-width: 768px){
	.custom-km {
		padding-left: 50px;
		margin-top: -8px;
	}
	.list .custom-km {
		padding-left: 20px;
		margin-top: 0;
	}
	#wpsl-stores,
	#wpsl-direction-details {
		position: absolute;
		width: 350px;
		height: 75%!important;
		background: white;
		padding: 15px;
		box-shadow: 0 3px 2px rgba(0, 0, 0, 0.1);
	}

	#wpsl-wrap #wpsl-result-list li {
		padding: 20px 10px 0;
		border-bottom-style: solid;
	}
	.list .wpsl-store-name {
		font-size: 20px;
		display: flex;
		justify-content: flex-start;
		align-items: center;
	}
	.list #wpsl-stores,
	.list #wpsl-direction-details {
		height: 100%;
	}
	.list #wpsl-result-list ul li {
		display: flex;
	}
	.list #wpsl-result-list ul li div {
		flex: 0 0 25%;
	}
	.list #wpsl-result-list ul li .wpsl-store-name {
		flex: 0 0 50%;
	}
	.list #wpsl-stores,
	.list #wpsl-direction-details {
		box-shadow: none;
	}
	.list .wpsl-contact-details {
		margin-top: 0!important;
	}
	.list #wpsl-result-list li {
		padding-bottom: 20px!important;
	}
}
@media screen and (max-width: 767px){
	#wpsl-wrap #wpsl-result-list li {
		padding: 20px 0 0 0!important;
	}
	#wpsl-search-wrap div label {
		display: none;
	}
	#wpsl-search-wrap form {
		flex-direction: column;
	}
	#wpsl-category,
	#wpsl-search-wrap .wpsl-dropdown {
		width: 100%!important;
	}
	#wpsl-search-wrap .wpsl-dropdown {
		height: 35px;
	}
	.map-buttons {
		max-width: none;
		padding-top: 10px;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.map-button {
		flex: 0 0 50%;
	}
	#wpsl-gmap {
		height: 35vh!important;
	}
	#wpsl-stores,
	#wpsl-direction-details {
		height: auto!important;
	}
	.list #wpsl-gmap {
		display: none;
	}
}
.wpsl-input svg {
    cursor: pointer !important;
}
</style>

<!-- FOOTER -->
<?php get_footer() ?>

<script>
    $(document).ready(function () {
        const map_button = $('.js-map-button'),
            map_wrapper = $('#wpsl-result-list'),
			map_select = $('.wpsl-dropdown ul li'),
			map_submit = $('#wpsl-search-btn')

        map_button.click(function (e) {
			e.preventDefault()
			var target = $(this).attr('id').replace('#', ''),
				width = $('.wpsl-search').width()
            // button state
            map_button.removeClass('active')
            $(this).addClass('active')
			// map state
			if(target != 'map'){
            	map_wrapper.parent().addClass('list')
            	map_wrapper.find('#wpsl-stores, #wpsl-direction-details').css('width', width)
			} else {
				map_wrapper.parent().removeClass('list')
            	map_wrapper.find('#wpsl-stores, #wpsl-direction-details').removeAttr('style')
			}
        })

		map_select.on('click', function(){
			var state = $(this).parent().parent().height()
			state != 0 ? map_submit.click() : ''
		})

    })

    jQuery(document).ready(function() {
        jQuery('#inlineFormInputName').mask('00000-000');
        jQuery('#wpsl-search-input').mask('00000-000');
        jQuery('form .wpsl-input svg').on('click', function($) {
            jQuery("#wpsl-search-btn").trigger("click");
        });
    });
    jQuery(window).load(function() {
        jQuery( "#wpsl-search-btn" ).trigger( "click" );
    });
</script>

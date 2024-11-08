<?php get_header(); ?>
<?php
$cust_code = isset($_GET['cust_code']) ? $_GET['cust_code'] : '';
$opportunity_Id = isset($_GET['opportunityId']) ? $_GET['opportunityId'] : '';
?>
<script type="text/javascript">
var custCode = "<?php echo $cust_code; ?>";
var opportunityId = "<?php echo $opportunity_Id; ?>";
</script>
<script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/js/bill/common.js" defer></script>  
<main class="l-content pt0 bgpadding">
	
<div class="tapes-bottomleft" data-appear-on="scroll">
	<div class="tape-gray tape-11" data-appear-animation="grayTape"></div>
	<div class="tape-black tape-12" data-appear-animation="blackTape1"></div>
	<div class="tape-black tape-13" data-appear-animation="blackTape1"></div>
</div>

<section class="m-section">
<div class="m-main" data-appear-on="load">

	<div class="m-main__content" data-appear-animation="fadeIn">
		<div class="m-main__image"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/human-resource-training/main.jpg" alt=""/></div>
		<div class="m-main__texts">
		  <h2 class="m-main__title"><span class="japanese">決済画面</span><span class="english">HUMAN RESOURCE TRAINING</span></h2>
			<div class="m-main__text01">ご決断おめでとうございます。</div>
			<div class="m-main__text01">素敵な未来を手にしましょう。</div>
			<div class="m-main__text03"><br class="pc">
				ご決断おめでとうございます。<br>
				素敵な未来を手にしましょう。<br>
		</div>
	</div>

	<div class="tapes-topleft">
		<div class="tape-gray m-main__tape01" data-appear-animation="grayTape"></div>
		<div class="tape-black m-main__tape02" data-appear-animation="blackTape1"></div>
		<div class="tape-black m-main__tape03" data-appear-animation="blackTape1"></div>
	</div>
	<div class="tapes-bottomright -impact">
		<div class="tape-black m-main__tape04" data-appear-animation="blackTape1"></div>
		<div class="tape-black m-main__tape05" data-appear-animation="blackTape1"></div>
	</div>

</div>
</section>



<section class="m-section" id="price" data-appear-on="scroll">	
	<div class="price-content">
		<div class="tape-gray price-bg01" data-appear-animation="grayTape"></div>
		<div class="tape-black price-bg02" data-appear-animation="blackTape1"></div>
		<div class="tape-black price-bg03" data-appear-animation="blackTape1"></div>
		<div class="tape-black price-bg04" data-appear-animation="blackTape1"></div>
		<div class="tape-black price-bg05" data-appear-animation="blackTape1"></div>
		<h2 class="m-title02 -center"><span class="english" data-appear-animation="blackTapeText">PRICE</span><span class="japanese" data-appear-animation="blackTapeText">プログラムの料金</span></h2>
		<div class="price-item">
			<div class="price-item__texts">
				<div class="price-item__text01">PRAN 1</div>
				<div class="price-item__text02">ブレイクスループラン</div>
				<div class="price-item__text05">※セミナーの内容により異なります。<br>詳しくは、LINE公式アカウントを<br class="sp">ご確認ください。</div>
			</div>
			<div class="price-item__price">
				<div class="price-item__text04">1,100,000<span>円/18回</span></div>
			</div>
			<div class="m-button"><a href="javascript:void(0);" onclick="f_submit(custCode,opportunityId,'BTH0001','ブレイクスループラン',1100000)"><span class="m-button__in">決済画面に進む</span></a></div>
		</div>
		<div class="price-item">
			<div class="price-item__texts">
				<div class="price-item__text01">PRAN 2</div>
				<div class="price-item__text02">スタンダードプラン</div>
				<div class="price-item__text05">※セミナーの内容により異なります。<br>詳しくは、LINE公式アカウントを<br class="sp">ご確認ください。</div>
			</div>
			<div class="price-item__price">
				<div class="price-item__text04">600,000<span>円/12回</span></div>
			</div>
			<div class="m-button"><a href="javascript:void(0);" onclick="f_submit(custCode,opportunityId,'STD0001','スタンダードプラン',600000)"><span class="m-button__in">決済画面に進む</span></a></div>
		</div>
		<div class="price-item">
			<div class="price-item__texts">
				<div class="price-item__text01">PRAN 3</div>
				<div class="price-item__text02">プライマリープラン</div>
				<div class="price-item__text05">※セミナーの内容により異なります。<br>詳しくは、LINE公式アカウントを<br class="sp">ご確認ください。</div>
			</div>
			<div class="price-item__price">
				<div class="price-item__text04">450,000<span>円/9回</span></div>
			</div>
			<div class="m-button"><a href="javascript:void(0);" onclick="f_submit(custCode,opportunityId,'PRM0001','プライマリープラン',450000)"><span class="m-button__in">決済画面に進む</span></a></div>
		</div>
	</div>
</section>
<script>
function toggleVisibility(id) {
    var element = document.getElementById(id);
    if (element.style.display === 'none') {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}
</script>

<div class="payment-buttons">
    <button onclick="toggleVisibility('payment1')">決済オプション1</button>
    <div id="payment1" style="display:none;">
		<div class="price-item">
			<div class="price-item__texts">
				<div class="price-item__text01">PRAN</div>
				<div class="price-item__text02">分割決済</div>
			</div>
			<div class="price-item__price">
				<div class="price-item__text04">100,000<span>円</span></div>
			</div>
			<div class="m-button"><a href="javascript:void(0);" onclick="f_submit(custCode,'PRM0001','プライマリープラン',450000)"><span class="m-button__in">決済画面に進む</span></a></div>
		</div>
    
		<div class="price-item">
			<div class="price-item__texts">
			<div class="price-item__text01">PRAN</div>
				<div class="price-item__text02">分割決済</div>
			</div>
			<div class="price-item__price">
				<div class="price-item__text04">200,000<span>円</span></div>
			</div>
			<div class="m-button"><a href="javascript:void(0);" onclick="f_submit(custCode,'PRM0001','プライマリープラン',450000)"><span class="m-button__in">決済画面に進む</span></a></div>
		</div>
		<div class="price-item">
			<div class="price-item__texts">
			<div class="price-item__text01">PRAN</div>
				<div class="price-item__text02">分割決済</div>
			</div>
			<div class="price-item__price">
				<div class="price-item__text04">300,000<span>円</span></div>
			</div>
			<div class="m-button"><a href="javascript:void(0);" onclick="f_submit(custCode,'PRM0001','プライマリープラン',450000)"><span class="m-button__in">決済画面に進む</span></a></div>
		</div>
	</div>
    
</div>
	
</main>
<?php get_template_part('parts/bread'); ?>
	
<?php get_footer(); ?>